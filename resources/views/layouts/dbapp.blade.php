{{-- Dashboard app layout --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dreamspace') }}</title>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">


    <!-- Styles -->
    <link id="gull-theme" rel="stylesheet" href="{{asset('assets\styles\css\themes\lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\styles\vendor\perfect-scrollbar.css')}}">
        
</head>
 <body class="text-left">
        <!-- Pre Loader Strat  -->
            <div class='loadscreen' id="preloader">
                <div class="loader spinner-bubble spinner-bubble-primary">
                </div>
            </div>
        <!-- Pre Loader end  -->
        <!-- ============ Compact Layout start ============= -->
            <!-- ============Deafult  Large SIdebar Layout start ============= -->
                <div class="app-admin-wrap layout-sidebar-large clearfix">
                   @include('common.topnav')
                   @include('common.sidenav')
                   @yield('content')

        <!-- header top menu end -->



    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
</div>

<!-- scripts-->
  
<script src="{{asset('assets\js\common-bundle-script.js')}}"></script>
<script src="{{asset('assets\js\vendor\echarts.min.js')}}"></script>
<script src="{{asset('assets\js\es5\echart.options.min.js')}}"></script>
<script src="{{asset('assets\js\es5\dashboard.v1.script.js')}}"></script>
<script src="{{asset('assets\js\script.js')}}"></script>  
<script src="{{asset('assets\js\sidebar.large.script.js')}}"></script>
</body>
</html>
