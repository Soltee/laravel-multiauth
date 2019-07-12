<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LARA-AUTH') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="text-white">
        <nav class="nav-h w-screen mx-auto border-b-2 border-white">
            <div class="flex justify-between p-6 pl-10 pr-10">
                <a class="flex" href="{{ url('/') }}">
                    <img class="logo-sm" src="{{ asset('svgs/laravel.svg') }}"/> LARA-AUTH
                </a>
                

                
                
                <div class="flex-intial">
                    @auth
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                                                
                    @endauth
                </div>

            </div>
        </nav>
        

        <main class="container body">
            <div class="ml-auto">
              @include('inc.messages') 
            </div>
            <div>   
                @yield('content')
            </div>  
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function(){
            let messages = document.querySelectorAll('cross');

            setTimeout(function(){
                messages.forEach(function(mge){
                    mge.style.opacity = 0;
                    mge.style.visibility = hidden;
                });
            }, 2000);
        });
    </script>
</body>
</html>
