<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\User as User;
use Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth::id();
        $userInfoArray = User::where('id', $id )
        ->get();;
        $userInfo = $userInfoArray[0];
        // dd($userInfo);
        return view('users/account', compact('userInfo'));
    }
    public function updateInfo()
    {

        $id = Auth::id();
        $userInfoArray = User::where('id', $id )
        ->get();;
        $userInfo = $userInfoArray[0];
        // dd($userInfo);
        return view('users/updateAccount', compact('userInfo'));
    }
    public function checkout()
    {

        $id = Auth::id();
        $userInfoArray = User::where('id', $id )
        ->get();;
        $userInfo = $userInfoArray[0];

        // $standardShipping = 8.95;
        // $expressShipping = 19.95;

        if ( Cart::count() <= 2 ) {
            $standardShipping = 8.95;
            $expressShipping = 19.95;
        } else if ( Cart::count() >= 3 && Cart::count() <= 5 ) {
            $standardShipping = 10.95;
            $expressShipping = 21.95;
        } else if ( Cart::count() >= 6 && Cart::count() <= 8 ) {
            $standardShipping = 12.95;
            $expressShipping = 23.95;
        } else {
            $standardShipping = 15.95;
            $expressShipping = 26.95;
        };


        // dd($userInfo);
        return view('cart/checkout', compact('userInfo','standardShipping','expressShipping'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::id();
        $userInfoArray = User::where('id', $id )
        ->get();;
        $userInfo = $userInfoArray[0];

        $userInfo->name = $request->name;
        $userInfo->lastname = $request->lastname;
        $userInfo->email = $request->email;
        $userInfo->phone_number = $request->phone_number;
        $userInfo->address_1 = $request->address_1;
        $userInfo->address_2 = $request->address_2;
        $userInfo->city = $request->city;
        $userInfo->state = $request->state;
        $userInfo->zip_code = $request->zip_code;
        $userInfo->shipping_1 = $request->shipping_1;
        $userInfo->shipping_2 = $request->shipping_2;
        $userInfo->shipping_city = $request->shipping_city;
        $userInfo->shipping_state = $request->shipping_state;
        $userInfo->shipping_zip_code = $request->shipping_zip_code;

        $userInfo->save();

        return view('users/account', compact('userInfo'));


    }
    public function checkoutUpdate(Request $request)
    {
        $id = Auth::id();
        $userInfoArray = User::where('id', $id )
        ->get();;
        $userInfo = $userInfoArray[0];

        $userInfo->name = $request->name;
        $userInfo->lastname = $request->lastname;
        $userInfo->email = $request->email;
        $userInfo->phone_number = $request->phone_number;
        $userInfo->address_1 = $request->address_1;
        $userInfo->address_2 = $request->address_2;
        $userInfo->city = $request->city;
        $userInfo->state = $request->state;
        $userInfo->zip_code = $request->zip_code;
        $userInfo->shipping_1 = $request->shipping_1;
        $userInfo->shipping_2 = $request->shipping_2;
        $userInfo->shipping_city = $request->shipping_city;
        $userInfo->shipping_state = $request->shipping_state;
        $userInfo->shipping_zip_code = $request->shipping_zip_code;

        $userInfo->save();

        $cartItems = Cart::content();

        $shippingAmt = $request->shipping;
        
        $finalTotal = Cart::subtotal() + $shippingAmt;
        // dd($shippingAmt);
        return view('cart/checkoutFinal', compact('userInfo','cartItems','shippingAmt', 'finalTotal'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
