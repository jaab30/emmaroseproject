<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Srmklive\PayPal\Services\ExpressCheckout;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function paymentDone(Request $request){

        $provider = new ExpressCheckout;

        $token=$request->token;
        $PayerID=$request->PayerID;

        $response = $provider->getExpressCheckoutDetails($token);

        // dd($response);
        $confirm = [];
        $confirm['invoiceId'] = $response['INVNUM'];
        $confirm['buyerEmail'] = $response['EMAIL'];
        $confirm['buyerFirst'] = $response['FIRSTNAME'];
        $confirm['buyerLast'] = $response['LASTNAME'];
        $confirm['items'] = [];
        foreach(Cart::content() as $key=>$cart){
            $itemDetail=[
                'name' => $cart->name,
                'price' => $cart->price,
                'qty' => $cart->qty,
            ];

            $confirm['items'][] = $itemDetail;
        }

        $confirm['total'] = $response['AMT'];
        // dd($confirm);
        $invoiceId=$response['INVNUM']??uniqid();
        $data=$this->cartData($invoiceId);

        $response = $provider->doExpressCheckoutPayment($data, $token, $PayerID);

        Cart::destroy();
        // return "Payment Completed..!";
        return view('cart.checkout', compact('confirm'));
    }



    public function paywithPaypal(){

        $provider = new ExpressCheckout; 
        $invoiceId=uniqid();
        $data=$this->cartData($invoiceId);

        // $data['total'] = Cart::total();

        $response = $provider->setExpressCheckout($data);

        // This will redirect user to PayPal
        return redirect($response['paypal_link']);

    }

    protected function cartData($invoiceId){
        
        $data = [];
        $data['items'] = [];

        foreach(Cart::content() as $key=>$cart){
            $itemDetail=[
                'name' => $cart->name,
                'price' => $cart->price,
                'qty' => $cart->qty,
            ];

            $data['items'][] = $itemDetail;
        }

        
        $data['invoice_id'] = $invoiceId;
        $data['invoice_description'] = "Emma Rose Baby Boutique Sales Invoice";
        $data['return_url'] = route('payment.done');
        $data['cancel_url'] = url('/test');

        // $data['total'] = Cart::total();

        $total = 0;
        foreach($data['items'] as $item) {
        $total += $item['price']*$item['qty'];
        }
        $data['total'] = $total;
        return $data;

    }

}
