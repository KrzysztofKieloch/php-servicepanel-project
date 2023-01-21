<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel='stylesheet' id='style-css' href='https://panszybka.com/wp-content/themes/PanSzybka/style.css?ver=5.8.3' type='text/css' />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Panel serwisowy') }}</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div id="app">
    <header>
        <div class="navigation">
            <div class="area">
                <div class="navigation-main-side">
                    <div class="classic-menu">
                        <li id="menu-item-4221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4221">
                            <a href="{{route('home')}}">Strona główna</a>
                        </li>
                        <li id="menu-item-4221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4221">
                            <a href="{{route('repairs.index')}}">Lista napraw</a>
                        </li>
                        <li id="menu-item-4221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4221">
                            <a href="{{route('prices.pricelist')}}">Cennik</a>
                        </li>
                        <li id="menu-item-4221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4221">
                            <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
                            </li>
                            </li>
                            <div class="navigation-rigth-side" id="menu-header" style="color:black">

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript">
        @yield('javascript')
    </script>
</body>
</html>
