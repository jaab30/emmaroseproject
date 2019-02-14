@extends('layouts.mainLogo')

@section('content') 

<div class="searchViewItemContainer">
    <h1 class="searchItemTitle">{{ $data }}</h1>
    <div class="sideViewItemContainer">

        <form  class="sideCard2 sideCardItem" action="{{route ('item')}}" method="get">
          <button class="btnCard" value="skirt" name="search" type="submit"><img class="insideImg" src="{{ asset('images/skirts.png') }}" alt="skirt"></button>
        </form>

        <form  class="sideCard2 sideCardItem" action="{{route ('search')}}" method="get">
          <button class="btnCard" value="easter" name="search" type="submit"><img class="insideImg" src="{{ asset('images/easter.png') }}" alt="easter"></button>
        </form>

        <form  class="sideCard2 sideCardItem" action="{{route ('search')}}" method="get">
          <button class="btnCard" value="valentine" name="search" type="submit"><img class="insideImg" src="{{ asset('images/valentines.png') }}" alt="valentines"></button>
        </form>

    </div>

    
    <div class="searchResult">
        
            @foreach($products as $product)
            <div class="searchItemsDiv">
                
                <div class="searchItems">
                    <p>{{ $product->name }}</p>
                    <a href="/products/{{ $product->id }}"><img class="imgSearchView" src="{{ $product->picture }}"></a>
                    
                    
                </div>
                <div class="middle">
                    <div class="itemInfoPrice">
                    <p>{{ $product->name }}</p>
                    <p>${{$product->price}}</p>
                    <a href="/products/{{ $product->id }}"><button class="itemInfo">More Info</button></a>
                </div>
                </div>
                <a href="/products/{{ $product->id }}"><div class="overlay"></div></a>
            </div>
            @endforeach
        
    </div>
</div>


@endsection
