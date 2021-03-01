<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>News - Quoc vuong start news</title>
        @include('layouts.link')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.nav')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                @yield('content')
            </div>
        </section>
        
        <!-- Footer-->
        @include('layouts.footer')
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <!-- Bootstrap core JS-->
        @include('layouts.script')
        @yield('page-script')
    </body>
</html>
