@extends('layouts.mainLogo')


@section('content')

<div class="accountInfowrapper">

        <div class="accountInfoContainer">

            <button class="goBackBtn chkoutBack" title="Go Back" onclick="goBack()"><img src="{{ asset('images/back2B.png') }}" alt="Back Icon"></button>
            <h1> Checkout </h1>

            <div class="customerInfoContainer">
                <div class="contactInfo shippingTo">
                    
                    <h2 class="shippingTextInst2"><span class="circleNumber">3</span>Review & make your payment</h2>
                    <p> <strong> Shipping to:</strong></p>
                    <p>{{ $userInfo->name }} {{ $userInfo->lastname }}</p>
                    <p>{{ $userInfo->shipping_1 }}</p>
                    <p>{{ $userInfo->shipping_2 }}</p>
                    <p>{{ $userInfo->shipping_city }}, {{ $userInfo->shipping_state }} - {{ $userInfo->shipping_zip_code }}</p>
                    <p>email: {{ $userInfo->email }}</p>
                    <p>Ph: {{ $userInfo->phone_number }}</p>
                </div>
                <div class="checkoutItemsTableContainer">
                    <table class="cartMainTableCheckout">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Qty</th>
                                <th>Unit Price</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($cartItems as $cartItem)

                                <tr>
                                    <td>{{ $cartItem->name}}</td>
                                    <td>{{ $cartItem->options->has('size') ? $cartItem->options->size : ''}}</td>
                                    <td>{{ $cartItem->qty}}</td>
                                    <td>$ {{ $cartItem->price}}</td>
                                    <td>$ {{ number_format($cartItem->price * $cartItem->qty, 2)}}</td>
                                </tr>

                            @endforeach
                            
                            <tr class="blankRow"></tr>
                            <tr>
                            <td></td>
                            <td></td>
                            <td></td><td>Sub-Total:</td>
                            <td>$ {{Cart::subtotal()}}</td> 
                            </tr>
                            
                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping:</td>
                            <td>$ {{$shippingAmt}}</td>
                            </tr>

                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total:</strong></td>
                            <td><strong>$ {{number_format(Cart::subtotal() + $shippingAmt, 2)}}</strong></td> 
                            </tr>
                            

                        </tbody>
                        
                    </table>
                    
                </div>
                <div class="paymentPaypalDivCheckout">
                

                    <form action="{{ route('payment.paypal') }}" method="get">
                    <input value="{{ $shippingAmt }}" name="shippingInfo" type="hidden">
                    <button type=submit><img src="/images/paypal4.png" alt="paypal icon"></button>
                    </form> 

                </div>
            </div>


        </div>
</div>



@endsection