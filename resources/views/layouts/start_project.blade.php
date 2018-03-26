<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="desciption" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="website, websites, web design, tonykulstudio, web architecture, web development, web studio,"/>
    <meta name="robots" content="index/follow"/>
    <meta name="DC.title" content="tkulstudio"/>

    <meta name="description" content="Welcome to tkulstudios, share your idea with us and we will make it a reality. Start a project with us today and be rest assured to get the best web services.">
    <meta itemprop="name" content="tkulstudio">
    <meta itemprop="description" content="Welcome to tkulstudios, share your idea with us and we will make it a reality. Start a project with us today and be rest assured to get the best web services">

    <meta name="og:title" content="tkulstudios">
    <meta name="og:description" content="Welcome to tkulstudios, share your idea with us and we will make it a reality. Start a project with us today and be rest assured to get the best web services">
    <meta name="og:url" content="http://tonykul.com/">
    <meta name="og:site_name" content="tkulstudios">
    <meta name="og:locale" content="en_US">
    <meta name="og:type" content="website">

    <title>tkulstudios</title>
    <!-- Fonts -->
    <link href="{{mix('/css/app.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{mix('/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700,700i,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115993651-1"></script>
    <script >
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115993651-1');
    </script>

</head>
<body>
<div id="app">
    <main class="start-project-form">
        <nav class="intro-section__nav">
            <div class="container intro-section__nav-container">
                <div class="row intro-section__nav-row">
                    <div class="logo-container">
                        <a href="/" class="logo">tkulstudios</a>
                    </div>
                    <div class="contact-container">
                        <a href='/start_project' id="contact_us">Contact us </a>
                        <div class="responsive-icon"  v-on:click="showMainMMenu()">
                            <span class="responsive-icon__icon_top"></span>
                            <span class="responsive-icon__icon_middle"></span>
                            <span class="responsive-icon__icon_bottom"></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section id="main-menu">
            <div class="main-menu__items-container">
                <a href="/about">About</a>
                <a href="/our_services">Services</a>
                <a href="/projects">Projects</a>
                <a href="/contact_us">Contact</a>
                <a href="/others">Others</a>
            </div>
        </section>

        <section class="container menu-content">
            @yield('menu-content')
        </section>

        <div class="start-project-form__content container">
            <div class="row">
                <div class="start-project-form__container">
                    @yield('content')

                    <div class="start-project__footer">
                        <div class="footer-content">
                            <h2 class="our-email">tkulstudios@gmail.com</h2>
                            <div class="social-networks row">
                                <div class="social-networks__item">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="social-networks__item">
                                    <a href=""><i class="fa fa-vk"></i></a>
                                </div>

                                <div class="social-networks__item">
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                </div>

                                <div class="social-networks__item">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="telephone-container">
                                <h2 class="telehpone">+2349096111758</h2>
                                <h2 class="telehpone">+79522643862</h2>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </main>

</div>
<script src="{{mix('/js/app.js')}}"></script>
@yield('scripts')

<script>
//    $(window).scroll(function () {
//        if($(this).scrollTop() > 1){
//            $('.intro-section__nav').addClass('nav-active');
//        }else{
//            $('.intro-section__nav').removeClass('nav-active');
//        }
//    });
</script>
</body>
</html>