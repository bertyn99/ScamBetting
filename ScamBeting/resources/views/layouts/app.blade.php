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

<body class="flex flex-col min-h-screen antialiased leading-none font-sans">
    <p class="bg-gray-300 text-center h-12">Famille, vie sociale, santé financière. Etes-vous prêt à tout miser ?
        Pour être aidé, appelez le 09-74-75-13-13
    </p>
    @include('layouts.navbar')
    <main id="app" class="bg-gray-100 py-4 flex-grow">


        <!--  <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                
   
    
            </div> -->
        @if(Route::currentRouteName() == 'home')

        @include('layouts.paris.bet')
        @else

        @yield('content')
        @endif




    </main>
    @include('layouts.footer')
    @stack('script')
</body>

</html>