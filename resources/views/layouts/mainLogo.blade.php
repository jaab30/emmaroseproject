<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('images/rose.png') }}">

        <title>Emma Rose B B</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->

        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
            /* img {
                width: 200px;
                height: 200px;
            }
            a {
                float: left;

            }
            .headerNavContainer{
                display:grid;
                grid-template-columns: 80% 10% 10%;
            }
            .account {
                grid-column-start: 2;

            }
            .cart {
                grid-column-start: 3;

            }
            .searchBtn {
                width: 60px;
                height: 25px;
            }
            .searchBtnMenu {
                width: 150px;
                height: 25px;
                background-color: white;
                border: none;
            }

            .searchBtnMenu:hover{
                cursor: pointer;
            } */
            /* .searchBtnMenu:focus{
                cursor: pointer;
            } */

           
        </style>
         <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Acme|Cherry+Cream+Soda|Homenaje|Montserrat:300,400,500,900|Mukta+Malar:200,300,400,500,700|Patua+One|Londrina+Solid:100,300,400,900|Oregano|Roboto:300,400,500"
    rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/searchViewItem.css') }}" rel="stylesheet">
    <link href="{{ asset('css/showItem.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wishList.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    <link href="{{ asset('css/account.css') }}" rel="stylesheet">
   

    </head>
<body>
    <header>
        <div id="app" class="headerContainer">
            <nav class="navbarEmma">
            <div class="horizontal_dotted_line"></div>
                <!-- <h2><a href="/">Emma Rose Baby Boutique</a></h2> -->
                <div class="logoImg2Div">
                    <a href="/"><img class="logoImg2" src="{{ asset('images/logoMainfinal2onlyB.png') }}" alt="Logo img">
                </div>
                <div class="navContainerEmma"></a>
                    <div class="dropdownEmma2"><img class="logginIconImg" src="/images/loggin2.png" alt="account icon">
                        <button class="dropbtnEmma2">{{ Auth::user() ? Auth::user()->name : 'Account' }}</button>
                        <div class="dropdownEmma-content2">
                        @guest
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                                @endif
                            @else
                                    <a href="{{ route('accountInfo') }}" role="button">
                                        Account</span>
                                    </a>

                                    <div>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        
                                    </div>
                            @endguest    
                        </div>
                    </div>
                </div>
                @auth
                <div class="wishList2">
                    <a class="cart" href="/saveditems/wishlist"><img alt="wish list icon" src="{{ asset('images/wish1.png') }}" width="40px" height="35px"></a>
                </div>
                @endauth

                <div class="cartDiv2">
                    <!-- <a class="cart" href="{{route('cart.index')}}">Shopping Cart</a><span class="cartCounter">{{Cart::count()}}</span> -->
                    <a class="cart" href="{{route('cart.index')}}"><img alt="shopping cart" src="{{ asset('images/cart2A.png') }}" width="30px" height="30px">
                    </a><span class="cartCounter2">{{Cart::count()}}</span>
                </div>
                <div class="horizontal_dotted_line2A"></div>
            </nav>
            
        </div>
      
        <div class="menuContainer">
            <div class="mainLinks">
                <form  class="skirtLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="skirt" name="search" type="submit">Skirts</button>
                </form>
                <form class="suspenderSkirtLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="suspenderskirt" name="search" type="submit">Suspender Skirts</button>
                </form>
                <form class="outfitLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="outfit" name="search" type="submit">Outfits</button>
                </form>
                <form class="bloomerLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="bloomer" name="search" type="submit">Bloomers</button>
                </form>
                <form class="girlShirtLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="girl_shirt" name="search" type="submit">Girl Shirts</button>
                </form>
                <form class="boyShirtLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="boy_shirt" name="search" type="submit">Boy Shirts - Onesies</button>
                </form>
            </div>
            <!-- <form action="/search" method="get">
                <input type="text" placeholder="Search" name="search">
                <button class="searchBtn" type="submit">Search</button>
            </form> -->
            <form class="searchLink" action="{{route ('search')}}" method="get">
                <input class="searchText" type="text" placeholder="ex. skirts" name="search">
                <button class="searchBtn" type="submit">Search</button>
            </form>
        </div>
       
    </header>

    <main class="mainContainer">
        @yield('content')
    </main>
       
    <footer>
        <div class="footerContainer">
            <h1>Emma Rose Baby Boutique</h1>
            <div class="iconDiv">
                <h3> Follow Us</h3>
                <a href="http://www.facebook.com/EmmaRoseBabyBoutique" target="_blank"><img class="iconImg" src="/images/facebook.png" alt="facebbok icon"></a>

                <a href="http://www.instagram.com/emmarosebabyboutique" target="_blank"><img class="iconImg" src="/images/instagram.png" alt="instagram icon"></a>

                <a href="http://www.pinterest.com/emmarosebaby" target="_blank"><img class="iconImg" src="/images/pinterest.png" alt="pinterest icon"></a>

                <a href="http://www.twitter.com/emma_rose_baby" target="_blank"><img class="iconImg" src="/images/twitter.png" alt="twitter icon"></a>
            </div>

           
            <div class="footerText2 footerItem">
            <h3> Contact Us </h3>
                <p>PO Box 679556</p>
                <p>Orlando, FL 32835</p>
                <p>Ph#: 407.690.2222</p>
                <p>email: <a href="mailto:contact@emmarosebabyboutique.com" target="_blank">contact@emmarosebabyboutique.com</a> </p>
                
            
            
            </div>
            
        </div>
    </footer>
     


     <script>
            function goBack() {
            window.history.back();
            }

            $(".thumb1").click(function(){
                $(".picture2").addClass("hidden")
                $(".picture1").removeClass("hidden")
            })
            $(".thumb2").click(function(){
                $(".picture1").addClass("hidden")
                $(".picture2").removeClass("hidden")
            })
            
            function showReviewDiv(id) {
                var reviewDiv = document.getElementById(id);
                if(reviewDiv.style.display == 'block')
                    reviewDiv.style.display = 'none';
                else
                    reviewDiv.style.display = 'block';
                }

        $('#starReview input:radio').addClass('input_hidden');
        $('#starReview label').click(function(){
            $(this).addClass('selected').siblings().removeClass('selected');
        });

        $("#rating-1").click(function(){
        $(".starSelect1").addClass('checked')
        $(".starSelect2").removeClass('checked')
        $(".starSelect3").removeClass('checked');
        $(".starSelect4").removeClass('checked');
        $(".starSelect5").removeClass('checked');
        })
        $("#rating-2").click(function(){
        $(".starSelect1").addClass('checked');
        $(".starSelect2").addClass('checked');
        $(".starSelect3").removeClass('checked');
        $(".starSelect4").removeClass('checked');
        $(".starSelect5").removeClass('checked');
        })
        $("#rating-3").click(function(){
        $(".starSelect1").addClass('checked');
        $(".starSelect2").addClass('checked');
        $(".starSelect3").addClass('checked');
        $(".starSelect4").removeClass('checked');
        $(".starSelect5").removeClass('checked');
        })
        $("#rating-4").click(function(){
        $(".starSelect1").addClass('checked');
        $(".starSelect2").addClass('checked');
        $(".starSelect3").addClass('checked');
        $(".starSelect4").addClass('checked');
        $(".starSelect5").removeClass('checked');
        })


        $("#rating-5").click(function(){
        $(".starIcon").addClass('checked')
        })

        function checkRequired() {
            if (document.getElementById("requiredMessage").textContent){
                $("#requiredMessage").empty();
            }
            var x = document.getElementById("rating-1").required;
            if (x === true){
                var paragraph = document.getElementById("requiredMessage");
                var text = document.createTextNode("Please enter your Rating");
                paragraph.appendChild(text); 
            }

          
            }

        
    </script>

         
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
   
</html>
