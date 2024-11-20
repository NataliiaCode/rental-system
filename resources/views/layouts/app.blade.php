<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    {{-- <link href="{{ asset('bootstrap.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .fixed-bottom {
            margin-left: 20px;
            /* Додає відступ 20px зліва до контейнера */
        }


        .fixed-bottom .btn-warning {
            animation: scale 1s ease-in-out infinite;
        }

        @keyframes scale {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>




</head>

<body>

    <!-- Page-->
    <div class="page">
        <!-- Page Header-->
        <header class="page-head" style="margin-bottom: 20px;">
            <!-- RD Navbar-->
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #e6e5e0">
                    <div class="container">
                        <img src="{{ asset('logo-1.png') }}" alt="" style="margin: 10px;">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('home') }}">Головна</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contacts') }}">Контакти</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">Про нас</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('reviews.index') }}">Відгуки</a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Об'єкти
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('properties.house') }}">Будинки</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('properties.apartments') }}">Апартаменти</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('properties.flats') }}">Квартири</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('properties.twolevels') }}">Дворівневі
                                                квартири</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('properties.cottages') }}">Котеджі</a>
                                        </li>

                                    </ul>
                                </li>



                            </ul>

                            <!-- Right Side Of Navbar -->
                            {{-- <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <button type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#cart-modal">Обрані
                                        </button>

                                    </a>
                                </li>

                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Логін') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Реєстрація') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>


                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                            </ul> --}}
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                {{-- <button type="button" class="btn" style="border: none" data-bs-toggle="modal"
                                    data-bs-target="#cart-modal">Обрані</button> --}}
                                <li class="nav-item">
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#cart-modal">Обрані</button>
                                </li>

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
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                            @admin
                                                <a class="dropdown-item" href="{{ route('admin.propertyTypes.index') }}">Типи
                                                    нерухомості</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.properties.index') }}">Нерухомість</a>
                                            @endadmin
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </header>

        {{-- <main class="py-4"> --}}
        <main style="min-height: 100vh; display: flex; flex-direction: column"> <!-- Додаємо min-height: 100vh -->
            @yield('content')
        </main>

        <!-- Page Footer-->

        {{-- <footer class="page-foot py-5 text-start bg-image fixed-bottom"
            style="background-image: url('{{ asset('images/bg-footer.jpg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
             --}}

        {{-- @include('footer.speed') --}}
        @include('footer.footer')
        @include('footer.speed')





    </div>


    <!-- Modal -->
    {{-- <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">

            <div class="modal-content">
                <div class="modal-header bg-light border-bottom">
                    <h1 class="modal-title fs-5 fw-bold text-success" id="exampleModalLabel">Обрані об’єкти</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="cart-modal-body">
                    <div class="container">
                        <div class="row">
                            @include('favorites.cart')
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light border-bottom">
                    <h5 class="modal-title fs-5 fw-bold text-success" id="cartModalLabel">Обрані об’єкти</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="cart-modal-body">
                    <div class="container px-4">
                        <div class="row">
                            @include('favorites.cart')
                        </div>
                    </div>
                </div>
{{--               
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                    </div> --}}
             
            </div>
        </div>
    </div>




</body>

</html>
