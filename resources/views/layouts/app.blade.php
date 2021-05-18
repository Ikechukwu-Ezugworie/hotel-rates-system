<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Hotel Rates System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="min-h-screen">
        <nav class="border bg-gray-500 shadow-sm flex w-full p-5">
            <div class="flex w-full flex-row justify-between">
                <a class="text-gray-50 self-center ml-5 font-semibold text-lg uppercase" href="{{ url('/') }}">
                    {{ __('Hotel Rates System') }}
                </a>

                <div class="flex mr-5" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="flex space-x-4">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="hover:text-gray-500 hover:bg-gray-50 shadow-md text-white uppercase border border-white rounded px-4 py-1" 
                                    href="{{ route('login') }}">
                                        {{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="">
                                    <a class="hover:text-gray-500 hover:bg-gray-50 shadow-md text-white uppercase border border-white rounded px-4 py-1" 
                                    href="{{ route('register') }}">
                                        {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="flex space-x-5">
                            <span class="flex text-white Capitalize px-4 py-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                    {{ Auth::user()->name }}
                                </span>

                                <div class="items-center flex" aria-labelledby="navbarDropdown">
                                <a class="flex hover:text-gray-500 hover:bg-gray-50 shadow-md text-white lowercase border border-white rounded px-4 py-1" 
                                    href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    <span class="ml-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                    </span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
