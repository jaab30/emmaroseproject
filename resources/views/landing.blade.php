@extends('layouts.main')


@section('content')

<div class="mainLogo">
            <img class="logoImg" alt="main log pic" src="{{ asset('images/logoMainfinal2onlyB.png') }}">
</div>

<div id="carouselExampleIndicators" class="carousel slide carouselContainer" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <form  class="carouselForm" action="{{route ('item')}}" method="get">
          <button class="btnCard" value="suspenderskirt" name="search" type="submit"><img class="d-block w-100 carouselImg" src="{{ asset('images/testcarousel2P.png') }}" alt="suspender skirts"></button>
      </form>
    </div>
    <div class="carousel-item">
      <form  class="carouselForm" action="{{route ('item')}}" method="get">
          <button class="btnCard" value="suspenderskirt" name="search" type="submit"><img class="d-block w-100 carouselImg" src="{{ asset('images/testcarousel2G.png') }}" alt="suspender skirts"></button>
      </form>
    </div>
    <div class="carousel-item">
      <form  class="carouselForm" action="{{route ('search')}}" method="get">
          <button class="btnCard" value="" name="search" type="submit"><img class="d-block w-100 carouselImg" src="{{ asset('images/testcarousel2R.png') }}" alt="outfits"></button>
      </form>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="cardContainer"> 

  <div class="cardItem card1">
      <form  class="skirtCard" action="{{route ('item')}}" method="get">
          <button class="btnCard" value="skirt" name="search" type="submit"><img class="imgCard" src="{{ asset('images/card1.png') }}" alt="skirts pic"></button>
      </form>
    
  </div>
  <div class="cardItem card2">
      <form  class="skirtCard" action="{{route ('item')}}" method="get">
          <button class="btnCard" value="outfit" name="search" type="submit"><img class="imgCard" src="{{ asset('images/card2.png') }}" alt="skirts pic"></button>
      </form>
  </div>
  <div class="cardItem card3">
      <form  class="skirtCard" action="{{route ('item')}}" method="get">
          <button class="btnCard" value="suspenderskirt" name="search" type="submit"><img class="imgCard" src="{{ asset('images/card3.png') }}" alt="skirts pic"></button>
      </form>
  </div>
</div>

@endsection

@section('footer')

<h3>this is the footer</h3>

@endsection