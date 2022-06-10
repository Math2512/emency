<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        @yield('meta-article')
        @yield('meta-realisation')
        @yield('meta-home')
        @yield('meta-social')
        @yield('meta-strategy')
        @yield('meta-identite')
        @yield('meta-developpement')
        @yield('meta-blog-index')
        @yield('meta-realisation-index')

        <title>@yield('meta-page')| Agence Emency</title>

        <link rel="icon" 
            type="image/png" 
            href="{{ asset('storage/icons/fav.png') }}">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    @include('partials.nav')
    <body class="bg-white">

        
        {!! EuCookieConsent::getPopup() !!}

        <div class="margin-nav container pr-4 pl-4" style=" margin-top: 6rem !important;">
            @if (session('alert'))
                <div class="alert alert-success pt-5 pb-4 mt-5">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('alert') }}
                </div>
            @endif
            <div class="container">
                @yield('content')
            </div>
        </div>
        
        @include('partials.footer')
		<script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            
            document.getElementById("menu-form").onclick = function() {
                document.getElementById("contact-menu").submit();
            }
        </script>
        @yield('homepage-scripts')
        @yield('contact-scripts')
        @yield('blog-scripts')
        @yield('article-scripts')
        @yield('realisation-scripts')
        @yield('typing-scripts')
        @yield('legacy-scripts')
        @yield('errors-scripts')
    </body>
</html>
