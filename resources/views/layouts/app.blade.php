<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
    <div id="app">
        @include('partials._navbar')
        <main class="py-4">
            <div class="container-fluid">
                @include('partials._message')
                <div class="row">
                    <div class="col-lg-1 d-none d-lg-block">
                       Ads here
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        @yield('content')
                    </div>
                    
                </div>
            </div>
        </main>
    </div>
    @section('scripts-css')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">        
    @show
</body>

</html>
