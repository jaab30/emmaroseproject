<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
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
            }
            img {
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
            }
            /* .searchBtnMenu:focus{
                cursor: pointer;
            } */

           
        </style>
    </head>
    <body>
    <header>
        <h2>this is the Regular header</h2>
        <div id="app" class="headerNavContainer">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="accountLink" href="#">Account</a>
                                        <a class="cart" href="/saveditems/wishlist">Wish List</a><br>
                                    </div>
                                </li>
                            @endguest
                            
                            <li><a class="cart" href="{{route('cart.index')}}">Shopping Cart</a><span class="cartCounter">{{Cart::count()}}</span></li><br>
                        </ul>
                    </div>
                </div>
               
            </nav>
        </div>
        <div class="menuContainer">
            <form action="{{route ('item')}}" method="get">
                <button class="searchBtnMenu" value="Skirt" name="search" type="submit">Skirt</button>
            </form>
            <form action="{{route ('item')}}" method="get">
                <button class="searchBtnMenu" value="Suspender Skirt" name="search" type="submit">Suspender Skirt</button>
            </form>
    <!-- <form action="/search" method="get">
        <input type="text" placeholder="Search" name="search">
        <button class="searchBtn" type="submit">Search</button>
    </form> -->
            <form action="{{route ('search')}}" method="get">
                <input type="text" placeholder="Search" name="search">
                <button class="searchBtn" type="submit">Search</button>
            </form>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
       
    <footer>
        <h2>this is the Regular footer</h2>
     </footer>   

     
         
    
     <script>
            function goBack() {
            window.history.back();
            }

            // $(".wishlistBtn").click(function(event){
            //     console.log('hi')
            //     // event.preventDefault();
            //     // var test = $(".test").val();
            //     // console.log(test)
            // });
    </script>
     </body>
   
</html>
