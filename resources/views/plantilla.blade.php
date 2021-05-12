<!DOCTYPE html>
    <html lang="en_EN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title','Manheim Soporte')</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="icon" type="image/jpg" href="{{ asset('img/favicon.jpg')}}">
    </head>

    
    <body class= "container body-content"> 
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('partials.nav')
                 @include('partials.session-status')
            </header>

            <main class="py-4" >
                @yield('content')     
                @yield('otro')
            </main>

            <footer class="row footer">
                {{------------------------------------ Terms y Social Media--}}
                <div class="col-md-12 text-center">
                    <div class="col-12 nav-links ">
                        <div class="list-inline">
                            <a href="{{ route('terminos') }}" class="list-inline-item">Términos &amp; Condiciones y Protección de Datos</a>| 
                            <a href="{{ route('legal') }}" class="list-inline-item">Aviso legal</a>
                        </div>
                        {{--  --}}
                        <div class="list-inline-new">
                            <a href="https://www.linkedin.com/company/manheim-espa-a" target="_blank"><span class="bi bi-linkedin"></span></a>
                            <a href="https://www.facebook.com/ManheimSpain/" target="_blank"><span class="bi bi-facebook"></span></a>
                            <a href="https://twitter.com/ManheimES" target="_blank"><span class="bi bi-twitter"></span></a>
                            <a href="https://www.youtube.com/channel/UCYCOT1oHVBKaWyyl5uX0zRA" target="_blank"><span class="bi bi-youtube"><span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 copyright-2 text-center">
                    <a href="https://www.manheim.es/">
                 Manheim España</a>|  Copyright @ 2008 - {{date('Y') }}
                 <!-- No pongas 2021 pon date y así no tendrás que cambiarlo todos los años... -->
                </div>
            </footer>
        </div>
    </body>


    <script src="{{ asset('/js/app.js') }}" defer ></script>
    @yield('scripts')
    
</html>

