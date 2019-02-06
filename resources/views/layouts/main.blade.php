<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/searchViewItem.css') }}" rel="stylesheet">
    <link href="{{ asset('css/showItem.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wishList.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">

    </head>
<body>
    <header>
        <div id="app" class="headerContainer">
            <nav class="navbarEmma">
            <div class="horizontal_dotted_line"></div>
                <h2><a href="/">Emma Rose Baby Boutique</a></h2>
                <div class="navContainerEmma">
                    <div class="dropdownEmma">
                        <button class="dropbtnEmma">{{ Auth::user() ? Auth::user()->name : 'Account' }}</button>
                        <div class="dropdownEmma-content">
                        @guest
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                                @endif
                            @else
                                    <a href="#" role="button">
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
                <div class="wishList">
                    <a class="cart" href="/saveditems/wishlist"><img alt="wish list icon" src="{{ asset('images/wish1.png') }}" width="40px" height="35px"></a>
                </div>
                @endauth

                <div class="cartDiv">
                    <!-- <a class="cart" href="{{route('cart.index')}}">Shopping Cart</a><span class="cartCounter">{{Cart::count()}}</span> -->
                    <a class="cart" href="{{route('cart.index')}}"><img alt="shopping cart" src="{{ asset('images/cart2A.png') }}" width="30px" height="30px">
                    </a><span class="cartCounter">{{Cart::count()}}</span>
                </div>
                <div class="horizontal_dotted_line2"></div>
            </nav>
            
        </div>
      
        <div class="menuContainer">
            <div class="mainLinks">
                <form  class="skirtLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="Skirt" name="search" type="submit">Skirts</button>
                </form>
                <form class="suspenderSkirtLink" action="{{route ('item')}}" method="get">
                    <button class="btnMenu" value="Suspender Skirt" name="search" type="submit">Suspender Skirts</button>
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
            <h3> Contact Us </h3>
            <p class="footerText1 footerItem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis odio fugiat vel veritatis molestiae magnam autem facilis assumenda minus, ea pariatur, mollitia id molestias a praesentium libero reiciendis optio?</p>
            <p class="footerText2 footerItem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet recusandae eveniet atque molestias, minima sequi praesentium fuga corrupti provident eum repudiandae tempore in asperiores nihil fugit explicabo tenetur, deleniti dolorum.</p>
            <p class="footerText3 footerItem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae distinctio cupiditate nemo consequatur nostrum facilis odio facere perferendis, ut temporibus consequuntur perspiciatis dolorum placeat corporis aliquam, unde at tempora assumenda.</p>
        </div>
    </footer>
     


     <script>
            function goBack() {
            window.history.back();
            }
            // $(".btnMenu").click(function(){
            //     let title = $(".btnMenu").val();
            //     let titleDiv = $("<h2>"+title+"</h2>");
            //     $(".searchItemTitle").append(title)
            //     console.log(title)

            // })
    </script>

         
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
   
</html>
