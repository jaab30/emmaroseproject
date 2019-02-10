@extends('layouts.mainLogo')

@section('content')
<div class="showItemContainer">
  
    <button class="goBackBtn" title="Go Back" onclick="goBack()"><img src="{{ asset('images/back2B.png') }}" alt="Back Icon"></button>  

    <p class="showItemTitle">{{ $saveditems->name }}</p>

    <div class="showItemImg">
      <div class="insideImgContainer">
        <div class="showImgDiv">
          <img class="picture1"src="{{ $saveditems->picture }}">
          <img class="picture2 hidden" src="{{ $saveditems->picture2 }}">
        </div>
      </div>
      <div class="showThumbnail1">
        <img class="thumbnail thumb1" src="{{ $saveditems->picture }}">
      </div>
      <div class="showThumbnail2">
        <img class="thumbnail thumb2" src="{{ $saveditems->picture2 }}">
      </div>
  </div>
  <div class="showItemDescription">
    <p class="showItemDescriptionTitle">{{ $saveditems->name }} </p>
    <p class="showItemPrice">${{$saveditems->price}}</p>
    
    <button class="reviewBtn" title="Review"><img src="{{ asset('images/5starC.png') }}" alt="Review Icon"></button>
    <ul>
      <li class="showItemDescriptionText"> {{ $data['summary'][0] }}.</li>
      <li class="showItemDescriptionText"> {{ $data['summary'][1] }}.</li>
      <li class="showItemDescriptionText"> {{ $data['summary'][2] }}.</li>
      <li class="showItemDescriptionText"> {{ $data['summary'][3] }}.</li>
    </ul>
    
    
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
    
          
        
  </div>
  <div class="itemFullDescription">
    <h3> Item Description </h3>
    <p> {{$saveditems->description}} </p>
    <div class="itemReviews">
    <h3> Reviews <img class="reviewImg" src="{{ asset('images/5starC.png') }}" alt="Review Icon"></h3>
    <p> </p>
    </div>
  </div>

</div>

@endsection





