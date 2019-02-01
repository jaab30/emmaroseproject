@extends('layouts.main')

@section("page-title", "new Page")


@section('content')

<p>{{ $products->name }}</p>
<p><strong>Description:</strong> {{ $products->description }}</p>
<img src="{{ $products->picture }}">
<img src="{{ $products->picture2 }}">
<p>Price: ${{$products->price}}</p>
<form action="{{ route('cart.edit', $products->id) }}" method="get">
  Quantity:
  <select name="quantity">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  <br>
  Size:
  <select name="size">
    <option value="6m">6 Months</option>
    <option value="12m">12 Months</option>
    <option value="18m">18 Months</option>
    <option value="2T">2T</option>
    <option value="3T">3T</option>
    <option value="4T">4T</option>
  </select>
  <br>
  <input type="submit" value="Add to cart">
</form>
<!-- <a href="{{ route('cart.edit', $products->id) }}">Cart</a> -->
<button>Review</button>
      <form action="{{ $data['id'] === 'null' ? route('login') : '/saveditems' }}" method="{{ $data['id'] === 'null' ? 'get' : 'post' }}">
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
      <button class="wishlistBtn" type="submit" {{ $data['status'] }}>{{ $data['title'] }}</button>

{{ csrf_field() }}
</form>
<button onclick="goBack()">Go Back</button>
<br>


@endsection

@section('footer')

<h3>this is the footer</h3>

@endsection

