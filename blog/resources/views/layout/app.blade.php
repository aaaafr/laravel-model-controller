<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel Comics')</title>

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="crossorigin="anonymous" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
    
    </head>
    <body>
    <header id="site_header">
    <div class="bg_blue">
    <div class="container">
    <div class="sites">
    <p>DC POWER VISA <i class="far fa-registered"></i></p>
    <p>ADDITIONAL DC SITES <i class="fas fa-sort-down"></i></p>
    </div>
    </div>
    </div>
    <div class="site_nav">
    <div class="container">
        <div class="menu">
        <div class="logo">
         <img src="{{asset('images/dc-logo.png')}}" alt="">
         </div>
         <div class="nav">
         <a href="{{ route('characters') }}">CHARACTERS</a>
    <a href="{{ route('comics') }}">COMICS</a>
    <a href="{{ route('movies') }}">MOVIES</a>
    <a href="{{ route('tv') }}">TV</a>
    <a href="{{ route('games') }}">GAMES</a>
    <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
    <a href="{{ route('videos') }}">VIDEOS</a>
    <a href="{{ route('fans') }}">FANS</a>
    <a href="{{ route('news') }}">NEWS</a>
    <a href="{{ route('shop') }}">SHOP <i class="fas fa-sort-down"></i> </a>
    </div>
    <div class="search">
    <p>Search <i class="fas fa-search"></i></p>
    </div>
        </div>
    </div>
    </div>
    <div class="backhero">
    
    </div>
    </header>
    <main id="main_content">
       @yield('content')
    </main>
    <footer id="site_footer">
    <div class="bg_blue">
    <div class="container">
    <div class="footer_menu">
    <div class="digital">
    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
    <p>DIGITAL COMICS</p>
    </div>
    <div class="merchandise">
    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
    <p>DC MERCHANDISE</p>
    </div>
    <div class="subscription">
    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
    <p>SUBSCRIPTION</p>
    </div>
    <div class="loc">
    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
    <p>COMIC SHOP LOCATOR</p>
    </div>
    <div class="visa">
    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
    <p>DC POWER VISA</p>
    </div>
    </div>
    </div>
    </div>
    <div class="dc_back">
    <div class="container">
    <div class="colonne">
    </div>
    </div>
    </div>
    </footer>
    </body>
</html>