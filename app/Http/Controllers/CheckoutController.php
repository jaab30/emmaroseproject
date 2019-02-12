<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\User as User;
use Illuminate\Http\Request;
use Auth;

class CheckoutController extends Controller
{

    public function paymentDone(Request $request){

        $provider = new ExpressCheckout;

        $token=$request->token;
        $PayerID=$request->PayerID;

        $response = $provider->getExpressCheckoutDetails($token);

        $id = Auth::id();
        $userInfoArray = User::where('id', $id )
        ->get();;
        $userInfo = $userInfoArray[0];


        // dd($response);
        $confirm = [];
        $confirm['invoiceId'] = $response['INVNUM'];
        $confirm['buyerEmail'] = $userInfo['email'];
        $confirm['buyerFirst'] = $userInfo['name'];
        $confirm['buyerLast'] = $userInfo['lastname'];
        $confirm['buyerPhone'] = $userInfo['phone_number'];
        $confirm['shipping_1'] = $userInfo['shipping_1'];
        $confirm['shipping_2'] = $userInfo['shipping_2'];
        $confirm['shipping_city'] = $userInfo['shipping_city'];
        $confirm['shipping_state'] = $userInfo['shipping_state'];
        $confirm['shipping_zip_code'] = $userInfo['shipping_zip_code'];

        $confirm['items'] = [];
        foreach(Cart::content() as $key=>$cart){
            $itemDetail=[
                'name' => $cart->name,
                'price' => $cart->price,
                'qty' => $cart->qty,
            ];

            $confirm['items'][] = $itemDetail;
        }

        $confirm['subTotal'] = $response['PAYMENTREQUEST_0_ITEMAMT'];
        $confirm['shipping_amt'] = $response['PAYMENTREQUEST_0_SHIPPINGAMT'];
        $confirm['total'] = $response['PAYMENTREQUEST_0_AMT'];
        // dd($confirm);
        $invoiceId=$response['INVNUM']??uniqid();
        $data=$this->cartData($invoiceId, $request);

        $response = $provider->doExpressCheckoutPayment($data, $token, $PayerID);


        Cart::destroy();
        // return "Payment Completed..!";
        return view('cart.confirm', compact('confirm'));
    }



    public function paywithPaypal(Request $request){
        
        $provider = new ExpressCheckout; 
        $invoiceId=uniqid();
        $data=$this->cartData($invoiceId, $request);
        $options = [
            'BRANDNAME' => 'Emma Rose Baby Boutique'  

        ];
        
        
        $response = $provider->setExpressCheckout($data);
        
        // $response = $this->provider->setExpressCheckout($data);
        // dd($response);
        // $response = $provider->addOptions($options)->setExpressCheckout($data);
        // dd($response['paypal_link']);
        // This will redirect user to PayPal
        return redirect($response['paypal_link']);

    }

    protected function cartData($invoiceId, $request){
        
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
        $data['subtotal'] = $total;
        $data['shipping'] = $request->shippingInfo;
        $data['total'] = $total + $data['shipping'];

        return $data;

    }

}
