<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="dosman" />
        @stack('meta-seo')
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{url('front/img/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url('front/css/styles.css')}}" rel="stylesheet" />
        <link href="{{url('front/css/custom.css')}}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Tangerine:wght@700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @stack('css')
    </head>

    <body>
        @include('front.layout.navbar')
        <header class="py-5 bg-light border-bottom mb-4" style="background: linear-gradient(90deg, rgba(28,126,222,1) 0%, rgba(81,159,102,0.7315301120448179) 48%, rgba(45,69,186,1) 100%);">
            <div class="container" >
                <div class="text-center mt-5">
                    <h1 class="fw-bolder" style="text-shadow: 5px 5px 10px white; margin-top: 90px;" data-aos="zoom-in">SMA NEGERI 1 GIANYAR</h1>
                    <p class="lead mb-0 text-light" data-aos="zoom-out">“Insan Cerdas, Sarat Prestasi, Berkarakter, Berbudaya, Peduli Lingkungan, dan Berwawasan Global”</p>
                </div>
            </div>
        </header>

        @yield('content')


        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front/js/scripts.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                delay: 300
            });
        </script>
        @stack('js')
    </body>
</html>
