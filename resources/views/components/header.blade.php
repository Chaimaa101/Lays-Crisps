<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/Logo.svg" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    @vite(['resources/css/app.css','resources/css/style.css','resources/js/app.js','resources/js/main.js'])
    <title>{{env('APP_NAME')}}</title>
  </head>
  <body>
    <header>
      <nav class="nav container">
        <a href="{{ route('products.index')}}" class="logo"><img src="{{ asset('storage/images/Logo.svg')}}" alt="" /></a>
        <div class="nav-mobile">
          <ul>
            <li><a href="{{route('products.index')}}" class="p-nav">Products</a></li>
            <li><a href="#about" class="p-nav">Collection</a></li>
            <li><a href="#videos" class="p-nav">Videos</a></li>
            <li><a href="#recipes" class="p-nav">Recipes</a></li>
            <li><a href="#where" class="p-nav">Where to Buy</a></li>
          </ul>
          <div class="buttons">
            <a href="" class="user"><i class="ri-shopping-cart-line"></i></a>
            <div class="user">
              <a href="{{ route('login') }}"><i class="ri-user-3-line"></i></a>            </div>
            <a href="{{ route('register') }}" class="botton2">Sign Up</a>
          </div>
          <a href="#" id="menu-x"><i class="ri-close-fill"></i></a>
        </div>
        <a href="#" id="menu"><i class="ri-menu-line"></i></a>
      </nav>
      <div class="hero">
        <div class="container">
          <div class="hero-left">
            <h1 class="h1">
              Feel th best taste with lays crisps
              <img src="{{asset('storage/images/backcheaps.svg')}}" alt="" />
            </h1>
            <p class="p1">
              Feel the best and awesome taste with Lays Crisps. There has been
              various kind of Crisps you can eat and feel the wonder taste of
              this awesome product.
            </p>
            <a href="{{route('products.index')}}" class="botton1">All Crisps</a>
          </div>
          <div class="hero-right">
            <img src="{{asset('storage/images/cheapsblue.svg')}}" alt="" />
          </div>
        </div>
      </div>
    </header>

    
    {{$slot}}
    
    <footer class="footer">
      <div class="container">
        <div class="left">
          <img src="{{asset('storage/images/Logo.svg')}}" alt="" />
          <ul>
            <li><a href="{{route('products.index')}}" class="p-nav">Products</a></li>
            <li><a href="#about" class="p-nav">About Us</a></li>
            <li><a href="#videos" class="p-nav">Videos</a></li>
            <li><a href="#recipes" class="p-nav">Recipes</a></li>
            <li><a href="#where" class="p-nav">Where to Buy</a></li>
          </ul>
          <div>
            <h3 class="h3-Semi">Follow Us</h3>
            <div class="social">
              <i class="ri-facebook-fill"></i>
              <i class="ri-instagram-fill"></i>
              <i class="ri-whatsapp-fill"></i>
            </div>
          </div>
          <p class="copyright">
            Copyright © <span class="year"></span> UIHUT all rights reserved.
          </p>
        </div>
        <div class="right">
          <div class="img-footer">
            <img class="circle" src="{{asset('storage/images/group-cheaps.svg')}}" alt="" />
            <img class="socered" src="{{asset('storage/images/sosered.svg')}}" alt="" />
            <img
              class="group-cheaps"
              src="{{asset('storage/images/circlebluesmall.svg')}}"
              alt=""
            />
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
