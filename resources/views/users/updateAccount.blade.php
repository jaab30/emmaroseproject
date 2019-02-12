@extends('layouts.mainLogo')


@section('content')

<div class="accountInfoContainer">
    <h1> Update Account Info </h1>

        <div class="customerInfoContainer">
            <form class="updateForm" action="{{ route('accountUpdate') }}" method="post">
                <div class="contactInfo">
                    <div>
                        <label><strong>Name: </strong></label>
                        <input value="{{ $userInfo->name }}" name="name" type="text" required>
                    </div>
                    <div>
                        <label><strong>Last Name: </strong></label>
                        <input value="{{ $userInfo->lastname }}" name="lastname" type="text" required>
                    </div>
                    <div>
                        <label><strong>email: </strong></label>
                        <input value="{{ $userInfo->email }}" name="email" type="text" required>
                    </div>
                    <div>
                        <label><strong>Phone Number: </strong></label>
                        <input value="{{ $userInfo->phone_number }}" name="phone_number" type="text">
                    </div>
                </div>
                <div class="mailingAddressContainer">
                    <h2> Mailing Address </h2>
                    <div>
                        <label><strong>Address: </strong></label>
                        <input id="mailingAddress" value="{{ $userInfo->address_1 }}" name="address_1" type="text">
                    </div>
                    <div>
                        <label><strong>Suite / Apt#: </strong></label>
                        <input id="mailingAddress2" value="{{ $userInfo->address_2 }}" name="address_2" type="text">
                    </div>
                    <div>
                        <label><strong>City: </strong></label>
                        <input id="mailingCity" value="{{ $userInfo->city }}" name="city" type="text">
                    </div>
                    <div>
                        <label><strong>State: </strong></label>
                        <input id="mailingState" value="{{ $userInfo->state }}" name="state" type="text">
                    </div>
                    <div>
                        <label><strong>Zip Code: </strong></label>
                        <input id="mailingZip" value="{{ $userInfo->zip_code }}" name="zip_code" type="text">
                    </div>
                </div>
                <div class="shippingAddressContainer">
                    <h2> Shipping Address </h2>
                    <div class="shippingCheckBox"><input type="checkbox" onclick="SetShippingAddress(this.checked)"/> Same as Mailing </div>
                    <div>
                        <label><strong>Address: </strong></label>
                        <input  id="shippingAddress" value="{{ $userInfo->shipping_1 }}" name="shipping_1" type="text" required>
                    </div>
                    <div>
                        <label><strong>Suite / Apt#: </strong></label>
                        <input id="shippingAddress2" value="{{ $userInfo->shipping_2 }}" name="shipping_2" type="text">
                    </div>
                    <div>
                        <label><strong>City: </strong></label>
                        <input id="shippingCity" value="{{ $userInfo->shipping_city }}" name="shipping_city" type="text" required>
                    </div>
                    <div>
                        <label><strong>State: </strong></label>
                        <input id="shippingState" value="{{ $userInfo->shipping_state }}" name="shipping_state" type="text" required>
                    </div>
                    <div>
                        <label><strong>Zip Code: </strong></label>
                        <input id="shippingZip" value="{{ $userInfo->shipping_zip_code }}" name="shipping_zip_code" type="text" required>
                    </div>
                </div>
                <div  class="updateBtn">
                    <input value="Submit" class="button success hollow" type="submit">
                </div>
            {{ csrf_field() }}
            </form>
        </div>

</div>

<script type="text/javascript"> 

  
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