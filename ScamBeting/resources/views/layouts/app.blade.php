<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class=" h-screen antialiased leading-none font-sans">
    @include('layouts.navbar')
    <div id="app" class="bg-gray-50 py-4">


        <!--  <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                
   
    
            </div> -->
        tets
        @if(Route::currentRouteName() == 'home')

        @include('paris.bet')
        @else

        @yield('content')
        @endif




    </div>
    @include('layouts.footer')
</body>

</html>