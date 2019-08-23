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
<body class="">
    <div id="app" class="text-white">
        <nav class="nav-h w-screen mx-auto border-b-2 border-white">
            <div class="flex justify-between  py-4 px-4 md:px-12 lg:px-16">
                <a class="flex items-center" href="{{ url('/') }}">
                    <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M637.5 241.6c-4.2-4.8-62.8-78.1-73.1-90.5-10.3-12.4-15.4-10.2-21.7-9.3-6.4.9-80.5 13.4-89.1 14.8-8.6 1.5-14 4.9-8.7 12.3 4.7 6.6 53.4 75.7 64.2 90.9l-193.7 46.4L161.2 48.7c-6.1-9.1-7.4-12.3-21.4-11.6-14 .6-120.9 9.5-128.5 10.2-7.6.6-16 4-8.4 22s129 279.6 132.4 287.2c3.4 7.6 12.2 20 32.8 15 21.1-5.1 94.3-24.2 134.3-34.7 21.1 38.3 64.2 115.9 72.2 127 10.6 14.9 18 12.4 34.3 7.4 12.8-3.9 199.6-71.1 208-74.5 8.4-3.5 13.6-5.9 7.9-14.4-4.2-6.2-53.5-72.2-79.3-106.8 17.7-4.7 80.6-21.4 87.3-23.3 7.9-2 9-5.8 4.7-10.6zm-352.2 72c-2.3.5-110.8 26.5-116.6 27.8-5.8 1.3-5.8.7-6.5-1.3-.7-2-129-266.7-130.8-270-1.8-3.3-1.7-5.9 0-5.9s102.5-9 106-9.2c3.6-.2 3.2.6 4.5 2.8 0 0 142.2 245.4 144.6 249.7 2.6 4.3 1.1 5.6-1.2 6.1zm306 57.4c1.7 2.7 3.5 4.5-2 6.4-5.4 2-183.7 62.1-187.1 63.6-3.5 1.5-6.2 2-10.6-4.5s-62.4-106.8-62.4-106.8L518 280.6c4.7-1.5 6.2-2.5 9.2 2.2 2.9 4.8 62.4 85.5 64.1 88.2zm12.1-134.1c-4.2.9-73.6 18.1-73.6 18.1l-56.7-77.8c-1.6-2.3-2.9-4.5 1.1-5s68.4-12.2 71.3-12.8c2.9-.7 5.4-1.5 9 3.4 3.6 4.9 52.6 67 54.5 69.4 1.8 2.3-1.4 3.7-5.6 4.7z"/></svg>
                    <span class="ml-2 font-bold text-md lg:text-lg">LARA-AUTH</span>
                </a>
                
                
                <div class="flex flex-row items-center">
                    @auth('admin')
                        <a href="{{ route('admin.home') }}" class="ml-2 inline-flex font-bold rounded-full items-start px-4 py-2 hover:text-gray-400">
                            <svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"/></svg>
                            <span class="ml-1 text-white">Home</span>
                        </a>
                        <a href="{{ route('admin.profile') }}" class="ml-2 inline-flex font-bold rounded-full items-start px-4 py-2 hover:text-gray-400">
                            <svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"/></svg>
                                <span class="ml-1 text-white">Edit Profile</span>
                            </a>
                    @endauth
                    @auth

                        <a class="ml-4 hover:text-indigo-100 flex flex-row items-center" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <svg class="w-6 h-6 text-white hover:text-indigo-100" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg>
                            <span class="ml-2 font-bold text-md">{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                                                
                    @endauth
                </div>

            </div>
        </nav>
        

        <main class="">
            <div class="">
                @include('inc.messages')
                <div class="">
                    @yield('content')
                </div>
            </div>  
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
