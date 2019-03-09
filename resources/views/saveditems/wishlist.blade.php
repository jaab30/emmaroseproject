@extends('layouts.mainLogo')

@section('content') 

<div class="wishListwrapper">
    <div class="wishListContainer">
        <h1> My Favorites </h1>
        <div class="wishListResult">
            @foreach($saveditems as $saveditem)
            <div class="wishListItemsDiv">

                <div class="wishListItems">
                    <p>{{ $saveditem->name }}</p>
                    <a href="/saveditems/{{ $saveditem->id }}"><img class="wishListImg"src="{{ $saveditem->picture }}"></a>

                    <div class="middle">
                        <div class="itemWishPrice">
                            <p>{{ $saveditem->name }}</p>
                            <p>${{$saveditem->price}}</p>
                            <a href="/saveditems/{{ $saveditem->id }}"><button class="wishInfo">Details</button></a>
                        </div>
                        <form method="POST" action="{{ route('itemdestroy', [$saveditem->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="deleteBtn" title="Delete" type="submit"><img src="{{ asset('images/trash.png') }}" alt="Trash Icon"></button>
                        </form>
                    </div>
                    
                    
                </div>
                <a href="/saveditems/{{ $saveditem->id }}"><div class="overlay"></div></a>
            </div>

            @endforeach
        </div>     
    </div>
</div>
@endsection
