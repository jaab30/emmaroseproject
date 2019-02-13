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
    
    <!-- <button class="reviewBtn" title="Review"><img src="{{ asset('images/5starC.png') }}" alt="Review Icon"></button> -->
    <div class="starReviewDiv">
      <a href="#review">
      <img class="reviewImgTop" src="{{$starImg}}" alt="Review Icon">
      </a>
    </div>

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
      <div id="review" class="itemReviews">
        <h3> Reviews <img class="reviewImg" src="{{$starImg}}" alt="Review Icon"><button onclick="showReviewDiv('reviewForm')" class="reviewItemBtn">Review This Item</button></h3>
      
        <div id="reviewForm" class="reviewFormDiv">

          <form class="reviewForm" action="{{route('reviewStore')}}" method="post">
              <div id="starReview" class="starReviewEntry">

                  <input id="rating-1" type="radio" name="rating" value="1" required>
                  <label for="rating-1"><span class="fa fa-star starIcon starSelect1"></span></label>

                  <input id="rating-2" type="radio" name="rating" value="2">
                  <label for="rating-2"><span class="fa fa-star starIcon starSelect2"></span></label>

                  <input id="rating-3" type="radio" name="rating" value="3">
                  <label for="rating-3"><span class="fa fa-star starIcon starSelect3"></span></label>

                  <input id="rating-4" type="radio" name="rating" value="4">
                  <label for="rating-4"><span class="fa fa-star starIcon starSelect4"></span></label>

                  <input id="rating-5" type="radio" name="rating" value="5">
                  <label for="rating-5"><span class="fa fa-star starIcon starSelect5"></span></label>
                  <p id="requiredMessage"></p>

              </div>
              <p class="reviewNameP">Name: </p>
              <input class="reviewName"type="text" name="review_user_name" placeholder="Your name.." required>
              <p class="reviewTitleP">Title: </p>
              <input class="reviewTitle" name="review_title" placeholder="Review Title.." required></textarea>
              <p class="reviewTextP">Review: </p>
              <textarea class="reviewText" name="review_text" placeholder="Write a review.."></textarea>
              <input type="hidden" value="{{ $saveditems->product_id }}" name="product_id">
              <input class="reviewSubBtn" onclick="checkRequired()" type="submit" value="Submit">
              {{ csrf_field() }}
          </form>
        </div>
        <div class="reviewContainer">
          @foreach($reviews as $review)
              <div class="reviewItem">
                  @if ($review->rating === 1)
                  <img class="ratingStarImg" src="{{ asset('images/star1.png') }}">
                  @elseif ($review->rating === 2)
                  <img class="ratingStarImg" src="{{ asset('images/star2.png') }}">
                  @elseif ($review->rating === 3)
                  <img class="ratingStarImg" src="{{ asset('images/star3.png') }}">
                  @elseif ($review->rating === 4)
                  <img class="ratingStarImg" src="{{ asset('images/star4.png') }}">
                  @elseif ($review->rating === 5)
                  <img class="ratingStarImg" src="{{ asset('images/star5.png') }}">
                  @endif
                  <h3>{{$review->review_title}}</h3>
                  <p><strong>User Name: </strong>{{$review->review_user_name}}</p>
                  <p><strong>Comments: </strong>{{$review->review_text}}</p>
              </div>
          @endforeach
        </div>

      </div>

  </div>

</div>


@endsection





