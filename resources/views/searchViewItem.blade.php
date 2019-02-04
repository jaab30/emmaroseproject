@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 

<div class="searchViewItemContainer">
    <h1>this is the Search Results View</h1>
    <div class="sideViewItemContainer">

    </div>
    <div class="searchResult">
        
            @foreach($products as $product)
            <div class="searchItems">
                <p>{{ $product->name }}</p>
                <img class="imgSearchView" src="{{ $product->picture }}">
                <p>Price: ${{$product->price}}</p>
                <a href="/products/{{ $product->id }}">View</a>
                <br>
            </div>
            @endforeach
        
    </div>
</div>


@endsection
