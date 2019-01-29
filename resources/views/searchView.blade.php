@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 

<h1>this is the Search Results View</h1>

@foreach($products as $product)
<p>{{ $product->name }}</p>
<p>{{ $product->summary }}</p>
<img src="{{ $product->picture }}">
<p>Price: ${{$product->price}}</p>
<a href="/products/{{ $product->id }}">View</a>
<br>
@endforeach

@endsection
