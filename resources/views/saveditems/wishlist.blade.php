@extends('layouts.main')

@section("page-title", "new Page")

@section('content') 
    <div class="wishListContainer">
        <h1> My Favorites </h1>
        <div class="wishListResult">
            @foreach($saveditems as $saveditem)
                <div class="wishListItems">
                    <p>{{ $saveditem->name }}</p>
                    <img class="wishListImg"src="{{ $saveditem->picture }}">
                    <div class="itemWishPrice">
                        <p>Price: ${{$saveditem->price}}</p>
                        <button class="wishInfo"><a class="wishInfo" href="/saveditems/{{ $saveditem->id }}">Details</a></button>
                    </div>
                    <form method="POST" action="{{ route('itemdestroy', [$saveditem->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="deleteBtn" title="Delete" type="submit"><img src="{{ asset('images/trash.png') }}" alt="Trash Icon"></button>
                    </form>
                </div>
            @endforeach
        </div>     
    </div>
@endsection
