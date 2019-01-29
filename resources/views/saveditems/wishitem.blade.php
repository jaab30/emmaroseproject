@extends('layouts.main')

@section("page-title", "new Page")


@section('content')

<p>{{ $saveditems->name }}</p>
<p><strong>Description:</strong> {{ $saveditems->description }}</p>
<img src="{{ $saveditems->picture }}">
<p>Price: ${{$saveditems->price}}</p>
<button>Review</button>
<button onclick="goBack()">Go Back</button>
<br>


@endsection


