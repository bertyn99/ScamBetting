<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Create </title>
</head>
<body>
    <header class="bg-blue-900 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>
    <div class="h-full w-full rounded flex justify-center py-5">
<form action={{ route('bet.store') }} class="flex flex-col w-64  " method="post">
        @csrf
        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                <select id="country" name="jeu" autocomplete="jeu" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  @foreach ($jeux as $jeu)
                <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
                  @endforeach
                </select>
                <select id="country" name="id_equipe_1" autocomplete="id_equipe_1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($equipes as $equipe)
                  <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                  </select>
                  <select id="country" name="id_equipe_2" autocomplete="id_equipe_2" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($equipes as $equipe)
                  <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                  </select>
        <input type="number" class="h-12 border " name="cote_1" placeholder="Rentrez la côte pour l'équipe 1">
        <input type="number" class="h-12 border " name="cote_2" placeholder="Rentrez la côte pour l'équipe 2">

        <button class="bg-blue-400 rounded" type="submit">Envoyer</button>

    </form>
</div>
    
</body>
</html>

