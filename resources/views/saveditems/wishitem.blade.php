@extends('layouts.main')

@section("page-title", "new Page")


@section('content')

<p>{{ $saveditems->name }}</p>
<p><strong>Description:</strong> {{ $saveditems->description }}</p>
<img src="{{ $saveditems->picture }}">
<img src="{{ $saveditems->picture2 }}">
<p>Price: ${{$saveditems->price}}</p>
<form action="{{ route('saveditems.edit', $saveditems->id) }}" method="get">
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
<button>Review</button>
<button onclick="goBack()">Go Back</button>
<br>


@endsection


