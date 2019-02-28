<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('images/rose.png') }}">

        <title>Emma Rose Baby Boutique</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

         <!-- Fonts -->
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
    <link href="{{ asset('css/queryMenu.css') }}" rel="stylesheet">
    
    

    </head>
<body>
    <header>
        <div id="app" class="headerContainer">
            <nav class="navbarEmma">
            <div class="horizontal_dotted_line"></div>
            <div class="menu-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
                
                <div class="navContainerEmma">
                    <div class="dropdownEmma">
                    <img class="logginIconImg" src="/images/loggin2.png" alt="account icon"><button class="dropbtnEmma">{{ Auth::user() ? Auth::user()->name : 'Account' }}</button>
                        <div class="dropdownEmma-content">
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
                
                <div class="cartDiv">
                    <a class="cart" href="{{route('cart.index')}}"><img alt="shopping cart" src="{{ asset('images/cart2A.png') }}" width="30px" height="30px">
                    </a><span class="cartCounter">{{Cart::count()}}</span>
                </div>
                @auth
                <div class="wishList">
                    <a class="wishLink" href="/saveditems/wishlist"><img alt="wish list icon" src="{{ asset('images/wish1.png') }}" width="40px" height="35px"></a>
                </div>
                @endauth
                <div class="iconDivTop">
                    <a href="http://www.facebook.com/EmmaRoseBabyBoutique" target="_blank"><img class="iconImg2" src="/images/facebook.png" alt="facebbok icon"></a>

                    <a href="http://www.instagram.com/emmarosebabyboutique" target="_blank"><img class="iconImg2" src="/images/instagram.png" alt="instagram icon"></a>

                    <a href="http://www.pinterest.com/emmarosebaby" target="_blank"><img class="iconImg2" src="/images/pinterest.png" alt="pinterest icon"></a>

                    <a href="http://www.twitter.com/emma_rose_baby" target="_blank"><img class="iconImg2" src="/images/twitter.png" alt="twitter icon"></a>
                </div>
                <form class="search-menu-slide" action="{{route ('search')}}" method="get">
                <input class="searchText" type="text" placeholder="ex. skirts" name="search">
                <button class="searchBtn-slide" type="submit">Search</button>
            </form>

                <div class="horizontal_dotted_line2"></div>
            </nav>
            
        </div>
      
        <div class="menuContainer menu-bar-slide">
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
        const menuBtn = document.querySelector(".menu-btn")
        const menuBarSlide = document.querySelector(".menu-bar-slide")
        const mainLinks = document.querySelector(".mainLinks")

        let showMenu = false;

        menuBtn.addEventListener("click", toggleMenu);

        function toggleMenu() {
            if (!showMenu) {
                menuBarSlide.classList.add("show");
                mainLinks.classList.add("show");
                menuBtn.classList.add("show");
                showMenu = true;
            } else {
                menuBarSlide.classList.remove("show");
                mainLinks.classList.remove("show");
                menuBtn.classList.remove("show");
                showMenu = false;
            }
        }

    </script>


         
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
   
</html>
