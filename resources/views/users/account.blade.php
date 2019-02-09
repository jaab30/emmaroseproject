@extends('layouts.mainLogo')


@section('content')

<div class="accountInfoContainer">
    <h1> Account Info </h1>

    <div class="customerInfoContainer">
        <div class="contactInfo">
            <p><strong>Name: </strong>{{ $userInfo->name }}</p>
            <p><strong>Last Name: </strong>{{ $userInfo->lastname }}</p>
            <p><strong>email: </strong>{{ $userInfo->email }}</p>
            <p><strong>Phone Number: </strong>{{ $userInfo->phone_number }}</p>
        </div>
        <div class="mailingAddressContainer">
            <h3> Mailing Address </h3>
            <p><strong>Address: </strong>{{ $userInfo->address_1 }}</p>
            <p><strong>Suite / Apt#:  </strong>{{ $userInfo->address_2 }}</p>
            <p><strong>City: </strong>{{ $userInfo->city }}</p>
            <p><strong>State: </strong>{{ $userInfo->state }}</p>
            <p><strong>Zip Code: </strong>{{ $userInfo->zip_code }}</p>
        </div>
        <div class="shippingAddressContainer">
             <h3> Shipping Address </h3>
            <p><strong>Address: </strong>{{ $userInfo->shipping_1 }}</p>
            <p><strong>Suite / Apt#:  </strong>{{ $userInfo->shipping_2 }}</p>
            <p><strong>City: </strong>{{ $userInfo->shipping_city }}</p>
            <p><strong>State: </strong>{{ $userInfo->shipping_state }}</p>
            <p><strong>Zip Code: </strong>{{ $userInfo->shipping_zip_code }}</p>
        </div>
        <div class="updateBtn">
            <a href="{{ route('accountForm') }}"> <button>Update</button><a>
        <div>
    </div>


</div>



@endsection