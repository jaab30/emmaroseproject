@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 

<h1>this is the Wish List View</h1>

@foreach($saveditems as $saveditem)
<p>{{ $saveditem->name }}</p>
<p>{{ $saveditem->summary }}</p>
<img src="{{ $saveditem->picture }}">
<p>Price: ${{$saveditem->price}}</p>
<a href="/saveditems/{{ $saveditem->id }}">View</a>
<form method="POST" action="{{ route('itemdestroy', [$saveditem->id]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Delete</button>
</form>
<br>
@endforeach

@endsection
