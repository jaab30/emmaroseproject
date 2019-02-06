@extends('layouts.main')

@section('content')

<div class="showItemContainer">

    <p class="showItemTitle">{{ $saveditems->name }}</p>
    <div class="showItemImg">
      <div class="showImgDiv">
        <img src="{{ $saveditems->picture }}">
        <img src="{{ $saveditems->picture2 }}">
      </div>
  </div>
  <div class="showItemDescription">
    <p class="showItemDescriptionTitle">{{ $saveditems->name }} </p>
    <p class="showItemDescriptionText"> {{ $saveditems->description }}</p>
    
    <p class="showItemPrice"><strong>Price: </strong>${{$saveditems->price}}</p>
    <form class="showItemForm" action="{{ route('saveditems.edit', $saveditems->id) }}" method="get">
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

    <div class="showBtns">
      <button class="reviewBtn" title="Review"><img src="{{ asset('images/review2.png') }}" alt="Review Icon"></button>
      <button class="goBackBtn" title="Go Back" onclick="goBack()"><img src="{{ asset('images/back2A.png') }}" alt="Back Icon"></button>
    </div>
  </div>
</div>








<!-- 


<div class="showItemContainer">
        <p class="showItemTitle">{{ $saveditems->name }}</p>
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

</div> -->

@endsection


