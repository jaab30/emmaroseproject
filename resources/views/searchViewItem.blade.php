@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 

<div class="searchViewItemContainer">
    <h1 class="searchItemTitle">{{ $data }}</h1>
    <div class="sideViewItemContainer">
        <div class="sideCard1 sideCardItem"><img src="https://via.placeholder.com/300x200"></div>
        <div class="sideCard2 sideCardItem"><img src="https://via.placeholder.com/300x100"></div>
        <div class="sideCard3 sideCardItem"><img src="https://via.placeholder.com/300x200"></div>

    </div>
    <div class="searchResult">
        <!-- <p></p> -->
        
            @foreach($products as $product)
            <div class="searchItems">
                <p>{{ $product->name }}</p>
                <a href="/products/{{ $product->id }}"><img class="imgSearchView" src="{{ $product->picture }}"></a>
                <div class="itemInfoPrice">
                    <p>${{$product->price}}</p>
                    <a href="/products/{{ $product->id }}"><button class="itemInfo">Details</button></a>
                </div>
            </div>
            @endforeach
        
    </div>
</div>


@endsection
