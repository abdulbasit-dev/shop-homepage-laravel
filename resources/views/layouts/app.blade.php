<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token"
    content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"
    defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch"
    href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito"
    rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}"
    rel="stylesheet">
</head>

<body>
  <div id="app">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand"
          href="{{ route('home') }}">{{ config('app.name', 'Shop') }}</a>
        <button class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
          id="navbarResponsive">

          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link"
                href="{{ route('home') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            {{-- ئەگەر گێست بوو لۆگین و ریجیستەری پشان بدە --}}
            @guest
              <li class="nav-item">
                <a class="nav-link"
                  href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="{{ route('register') }}">Register</a>
              </li>
            @endguest

            @auth
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  {{ auth()->user()->name }}

                </a>
              </li>
              <li>
                <a href="{{ route('categories.index') }}"
                  class="nav-link">
                  Categories
                </a>
              </li>
              <li>
                <a href="{{ route('products.index') }}"
                  class="nav-link">
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();
                                  ">Logout</a>
              </li>
              <form action="{{ route('logout') }}"
                method="POST"
                id="logout-form"
                class="d-none">
                @csrf
              </form>
            @endauth
            {{-- @guest
              <li class="nav-item">
                <a class="nav-link"
                  href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link"
                    href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown"
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest --}}
          </ul>
        </div>
      </div>
    </nav>



    <!-- Page Content -->
    <div class="container my-5">

      <div class="row">
        @yield('content')
      </div>
      {{-- /row --}}

    </div>
    {{-- /container --}}

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website {{ date('Y') }}</p>
      </div>
      <!-- /.container -->
    </footer>
  </div>
</body>

</html>
