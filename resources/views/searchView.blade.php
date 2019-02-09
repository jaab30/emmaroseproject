@extends('layouts.mainLogo')

@section("page-title", "new Page")

@section('content') 

<div class="searchViewContainer">

    <h1>this is the Search Results View</h1>
    <div class="sideViewItemContainer">

    </div>
    <div class="searchResult">
        <div class="searchItems">
            @foreach($products as $product)
            <p>{{ $product->name }}</p>
            <img class="imgSearchView" src="{{ $product->picture }}">
            <p>Price: ${{$product->price}}</p>
            <a href="/products/{{ $product->id }}">View</a>
            <br>
            @endforeach
        </div>
    </div>

</div>

@endsection
