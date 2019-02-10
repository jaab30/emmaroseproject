@extends('layouts.mainLogo')

@section('content')
<div class="showItemContainer">
  
    <button class="goBackBtn" title="Go Back" onclick="goBack()"><img src="{{ asset('images/back2B.png') }}" alt="Back Icon"></button>  

    <p class="showItemTitle">{{ $products->name }}</p>

    <div class="showItemImg">
      <div class="insideImgContainer">
        <div class="showImgDiv">
          <img class="picture1"src="{{ $products->picture }}">
          <img class="picture2 hidden" src="{{ $products->picture2 }}">
        </div>
      </div>
      <div class="showThumbnail1">
        <img class="thumbnail thumb1" src="{{ $products->picture }}">
      </div>
      <div class="showThumbnail2">
        <img class="thumbnail thumb2" src="{{ $products->picture2 }}">
      </div>
  </div>


  <div class="showItemDescription">
    <p class="showItemDescriptionTitle">{{ $products->name }} </p>
    <p class="showItemPrice">${{$products->price}}</p>
    
    <button class="reviewBtn" title="Review"><img src="{{ asset('images/5starC.png') }}" alt="Review Icon"></button>
    <!-- <img class="reviewStars" src="{{ asset('images/5star.png') }}" alt="review icon"> -->
    <ul>
      <li class="showItemDescriptionText"> {{ $data['summary'][0] }}.</li>
      <li class="showItemDescriptionText"> {{ $data['summary'][1] }}.</li>
      <li class="showItemDescriptionText"> {{ $data['summary'][2] }}.</li>
      <li class="showItemDescriptionText"> {{ $data['summary'][3] }}.</li>
    </ul>
    
    
    <form class="showItemForm" action="{{ route('cart.edit', $products->id) }}" method="get">
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
    <!-- <a href="{{ route('cart.edit', $products->id) }}">Cart</a> -->
    <!-- <div class="showBtns"> -->
          
            <form class="wishlistForm" action="{{ $data['id'] === 'null' ? route('login') : '/saveditems' }}" method="{{ $data['id'] === 'null' ? 'get' : 'post' }}">
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
              <button class="wishlistBtn" title="Wishlist" type="submit" {{ $data['status'] }}><img class="wishlistImg" src="{{ $data['title'] }}" alt="Wishlist Image"></button>
          {{ csrf_field() }}
        </form> 
  </div>
  <div class="itemFullDescription">
    <h3> Item Description </h3>
    <p> {{$products->description}} </p>
    <div class="itemReviews">
    <h3> Reviews <img class="reviewImg" src="{{ asset('images/5starC.png') }}" alt="Review Icon"></h3>
    <p> </p>
  </div>
  </div>
  
        
        
      
    <!-- </div> -->
  <!-- </div> -->
</div>

<script>



</script>


@endsection


