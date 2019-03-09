@extends('layouts.mainLogo')


@section('content')

<div class="accountInfowrapper">
    <div class="accountInfoContainer">
        <h1> Checkout</h1>

            <div class="customerInfoContainerCheckout">
                
                <form class="updateFormCheckout" action="{{ route('checkoutUpdate') }}" method="post">
                    <div class="contactInfoCheckout">
                    <p class="shippingTextInst"><span class="circleNumber">1</span>Billing & Shipping Information</p>
                        <div class="labelTop">
                            <label><strong>Name: </strong></label>
                            <input value="{{ $userInfo->name }}" name="name" type="text" size="10" required>
                        </div>
                        <div>
                            <label><strong>Last Name: </strong></label>
                            <input value="{{ $userInfo->lastname }}" name="lastname" type="text" size="10" required>
                        </div>
                        <div>
                        <!-- <p><strong>email: </strong>{{$userInfo->email}}</p> -->
                            <input value="{{ $userInfo->email }}" name="email" type="hidden" size="20">
                        </div>
                        <div>
                            <label><strong>Phone Number: </strong></label>
                            <input value="{{ $userInfo->phone_number }}" name="phone_number" type="text" size="10">
                        </div>
                    </div>
                    <div class="mailingAddressContainerCheckout">
                        <h2> Mailing Address </h2>
                        <div>
                            <label><strong>Address: </strong></label>
                            <input id="mailingAddress" value="{{ $userInfo->address_1 }}" name="address_1" type="text">
                        </div>
                        <div>
                            <label><strong>Suite / Apt#: </strong></label>
                            <input id="mailingAddress2" value="{{ $userInfo->address_2 }}" name="address_2" type="text" size="15">
                        </div>
                        <div>
                            <label><strong>City: </strong></label>
                            <input id="mailingCity" value="{{ $userInfo->city }}" name="city" type="text" size="10">
                        </div>
                        <div>
                            <label><strong>State: </strong></label>
                            <input id="mailingState" value="{{ $userInfo->state }}" name="state" type="text" size="2">
                        </div>
                        <div>
                            <label><strong>Zip Code: </strong></label>
                            <input id="mailingZip" value="{{ $userInfo->zip_code }}" name="zip_code" type="text" size="7">
                        </div>
                    </div>
                    <div class="shippingAddressContainerCheckout">
                        <h2> Shipping Address </h2>
                        <div class="shippingCheckBox"><input id="shippingCheckBoxInput" type="checkbox" onclick="SetShippingAddress(this.checked);"/> Same as Mailing </div>
                        <div>
                            <label><strong>Address: </strong></label>
                            <input  id="shippingAddress" value="{{ $userInfo->shipping_1 }}" name="shipping_1" type="text" required>
                        </div>
                        <div>
                            <label><strong>Suite / Apt#: </strong></label>
                            <input id="shippingAddress2" value="{{ $userInfo->shipping_2 }}" name="shipping_2" type="text" size="15">
                        </div>
                        <div>
                            <label><strong>City: </strong></label>
                            <input id="shippingCity" value="{{ $userInfo->shipping_city }}" name="shipping_city" type="text" size="10" required>
                        </div>
                        <div>
                            <label><strong>State: </strong></label>
                            <input id="shippingState" value="{{ $userInfo->shipping_state }}" name="shipping_state" type="text" size="2" required>
                        </div>
                        <div>
                            <label><strong>Zip Code: </strong></label>
                            <input id="shippingZip" value="{{ $userInfo->shipping_zip_code }}" name="shipping_zip_code" type="text" size="7" required>
                        </div>
                    </div>
                    
                    <div class="shippingInfoContainer">
                    <p class="checkoutTextInst"><span class="circleNumber">2</span>Select Shipping Service</p>
                        
                        <div class="shippingOptions">
                            
                            <p>
                            <input class="radioBtn" type="radio" name="shipping" value="{{$standardShipping}}" checked>
                            <label>Standard (3-5 days): {{$standardShipping}}</label></p>
                            <p>
                            <input class="radioBtn" type="radio" name="shipping" value="{{$expressShipping}}">
                            <label>Express (2-3 days): {{$expressShipping}}</label></p>
                            <p> **Shipping only available within the US** </p>
                        </div>
                    </div>

                    <div  class="continueCheckoutBtn">
                        <input value="Continue to Checkout" class="button success hollow" type="submit">
                    </div>

                {{ csrf_field() }}
                </form>
                
            </div>

    </div>

</div>

<script type="text/javascript"> 

                if (document.getElementById('shippingAddress').value) {

                    document.getElementById("shippingCheckBoxInput").checked = false;
                    document.getElementById('shippingAddress').value = document.getElementById('shippingAddress').value;   
                    document.getElementById('shippingAddress2').value = document.getElementById('shippingAddress2').value;   
                    document.getElementById('shippingCity').value = document.getElementById('shippingCity').value;   
                    document.getElementById('shippingState').value = document.getElementById('shippingState').value;   
                    document.getElementById('shippingZip').value = document.getElementById('shippingZip').value;  

                } else {

                    document.getElementById('shippingAddress').value = document.getElementById('mailingAddress').value;   
                    document.getElementById('shippingAddress2').value = document.getElementById('mailingAddress2').value;   
                    document.getElementById('shippingCity').value = document.getElementById('mailingCity').value;   
                    document.getElementById('shippingState').value = document.getElementById('mailingState').value;   
                    document.getElementById('shippingZip').value = document.getElementById('mailingZip').value;   
                    document.getElementById("shippingCheckBoxInput").checked = true;
                }

  
function SetShippingAddress(checked) {  
          if (checked) {  

            console.log(document.getElementById('mailingAddress').value) 

                    document.getElementById('shippingAddress').value = document.getElementById('mailingAddress').value;   
                    document.getElementById('shippingAddress2').value = document.getElementById('mailingAddress2').value;   
                    document.getElementById('shippingCity').value = document.getElementById('mailingCity').value;   
                    document.getElementById('shippingState').value = document.getElementById('mailingState').value;   
                    document.getElementById('shippingZip').value = document.getElementById('mailingZip').value;   
          } else {  
                    document.getElementById('shippingAddress').value = '';   
                    document.getElementById('shippingAddress2').value = '';   
                    document.getElementById('shippingCity').value = '';   
                    document.getElementById('shippingState').value = '';   
                    document.getElementById('shippingZip').value = '';   
          }  
}  
  
</script>

    @endsection