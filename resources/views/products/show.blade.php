@extends('layouts.main')

@section("page-title", "new Page")


@section('content')
<div class="showItemContainer">

    <p class="showItemTitle">{{ $products->name }}</p>
    <div class="showItemImg">
      <div class="showImgDiv">
        <img src="{{ $products->picture }}">
        <img src="{{ $products->picture2 }}">
      </div>
  </div>
  <div class="showItemDescription">
    <p> {{ $products->description }}</p>
    
    <p class="showItemPrice"><strong>Price: </strong>${{$products->price}}</p>
    <form class="showItemForm" action="{{ route('cart.edit', $products->id) }}" method="get">
      <h3 class="showItemText1">Quantity:</h3>
      <select class="showItemSelectQty" name="quantity">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
      <h3 class="showItemText2">Size:</h3>
      <select class="showItemSelectSize" name="size">
        <option value="6m">6 Months</option>
        <option value="12m">12 Months</option>
        <option value="18m">18 Months</option>
        <option value="2T">2T</option>
        <option value="3T">3T</option>
        <option value="4T">4T</option>
      </select>
      
      <input type="submit" value="Add to cart">
    </form>
    <!-- <a href="{{ route('cart.edit', $products->id) }}">Cart</a> -->
    <div class="showBtns">
      <button class="reviewBtn" title="Review"><img src="{{ asset('images/review2.png') }}" alt="Review Icon"></button>
            <form class="wishlistForm" action="{{ $data['id'] === 'null' ? route('login') : '/saveditems' }}" method="{{ $data['id'] === 'null' ? 'get' : 'post' }}">
              <input class="test" type="hidden" value="{{ $products->id }}" name="product_id">
              <input class="test" type="hidden" value="{{ $products->name }}" name="name">
              <input type="hidden" value="{{ $products->description }}" name="description">
              <input type="hidden" value="{{ $products->summary }}" name="summary">
              <input type="hidden" value="{{ $products->tags }}" name="tags">
              <input type="hidden" value="{{ $products->picture }}" name="picture">
              <input type="hidden" value="{{ $products->picture2 }}" name="picture2">
              <input type="hidden" value="{{ $products->category }}" name="category">
              <input type="hidden" value="{{ $products->genre }}" name="genre">
              <input type="hidden" value="{{ $products->color }}" name="color">
              <input type="hidden" value="{{ $products->price }}" name="price">
              <input type="hidden" value="{{ Auth::id() }}" name="user_id">
              <button class="wishlistBtn" title="Wishlist" type="submit" {{ $data['status'] }}><img class="wishlistImg" src="{{ $data['title'] }}" alt="Wishlist Image"></button>
          {{ csrf_field() }}
        </form>
      <button class="goBackBtn" title="Go Back" onclick="goBack()"><img src="{{ asset('images/back2A.png') }}" alt="Back Icon"></button>
    </div>
  </div>
</div>


@endsection

@section('footer')

<h3>this is the footer</h3>

@endsection

