<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Mandalay Technological University</title>
    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/material.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->

    <style>
    #title{
        color: grey;
    }
    #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
    }
    </style>
    @yield('style')
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <div class="header mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
            <a  id="title" class="mdl-layout-title" href="/">
            <!-- <img class="logo-image" src="images/logo.png"> -->
                <span class="title-prefix">M</span>andalay
                <br><span class="title-prefix">T</span>echnological
                <br><span class="title-prefix">U</span>niversity
            </a>
                <div class="header-spacer mdl-layout-spacer"></div>
                <div class="navigation-container">
                    <nav class="navigation mdl-navigation">
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/departments/civil">Departments</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/academic">Acedamic Plan</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Activities</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/research">Research</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Alumini</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/about">About</a>
                    </nav>
                </div>
                <a class="mobile-title mdl-layout-title" href="/">
            <!-- <img class="logo-image" src="images/logo.png"> -->
             <span class="title-prefix">M</span>andalay
                <br><span class="title-prefix">T</span>echnological
                <br><span class="title-prefix">U</span>niversity
                </a>
            </div>
        </div>
        <div class="drawer mdl-layout__drawer">
            <span class="mdl-layout-title">
          <img class="logo-image" src="images/logo-white.png">
        </span>
            <nav class="mdl-navigation">
                {{-- <a class="mdl-navigation__link" href="">Phones</a>
                <a class="mdl-navigation__link" href="">Tablets</a>
                <div class="drawer-separator"></div>
                <span class="mdl-navigation__link" href="">Versions</span>
                <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
                <a class="mdl-navigation__link" href="">KitKat 4.4</a>
                <div class="drawer-separator"></div>
                <span class="mdl-navigation__link" href="">Resources</span>
                <a class="mdl-navigation__link" href="">Official blog</a>
                <div class="drawer-separator"></div>
                <span class="mdl-navigation__link" href="">For developers</span>
                <a class="mdl-navigation__link" href="">App developer resources</a> --}}
                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/departments/civil">Departments</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/academic">Acedamic Plan</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Activities</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Research</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Alumini</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/about">About</a>
            </nav>
        </div>
        <div class="content mdl-layout__content" style="margin: 0;">
            @yield('content')

            <footer class="footer mdl-mega-footer">
                <div class="mdl-mega-footer--top-section">
                    <div class="mdl-mega-footer--left-section">
                        <a href="#" class="fa fa-facebook"></a>
                        &nbsp;
                        <a href="#" class="fa fa-twitter"></a>
                        &nbsp;
                    </div>
                    <div class="mdl-mega-footer--right-section">
                        <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
                    </div>
                </div>
                <div class="mdl-mega-footer--middle-section">
                    <p class="mdl-typography--font-light">Satellite imagery: © 2014 Astrium, DigitalGlobe</p>
                    <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
                </div>
                <div class="mdl-mega-footer--bottom-section">
                    <a class="link link-menu mdl-typography--font-light" id="version-dropdown">
              Versions
              <i class="material-icons">arrow_drop_up</i>
            </a>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
                        <li class="mdl-menu__item">5.0 Lollipop</li>
                        <li class="mdl-menu__item">4.4 KitKat</li>
                        <li class="mdl-menu__item">4.3 Jelly Bean</li>
                        <li class="mdl-menu__item">Android History</li>
                    </ul>
                    <a class="link link-menu mdl-typography--font-light" id="developers-dropdown">
              For Developers
              <i class="material-icons">arrow_drop_up</i>
            </a>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
                        <li class="mdl-menu__item">App developer resources</li>
                        <li class="mdl-menu__item">Android Open Source Project</li>
                        <li class="mdl-menu__item">Android SDK</li>
                        <li class="mdl-menu__item">Android for Work</li>
                    </ul>
                    <a class="link mdl-typography--font-light" href="">Blog</a>
                    <a class="link mdl-typography--font-light" href="">Privacy Policy</a>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <!-- <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
</body>

</html>