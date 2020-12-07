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
    <div class="h-full w-full rounded flex flex-row justify-center py-5">
        <h1>Modification Equipe</h1>
        <a href="{{ route('equipe.index') }}">accueil customers</a>
        <form action={{ route('equipe.update',['id'=>$equipe->id]) }} class="flex flex-col w-64  " method="post">
                @csrf
                @method('PUT')
                <input type="text" class="h-12 border" name="nom_equipe" value="{{$equipe->nom_equipe}}" placeholder="nomEquipe">
        
                <input type="text" class="h-12 border " name="idJeu" value="{{$equipe->id_jeu}}" placeholder="idJeu">
        
                <button class="bg-blue-400 rounded" type="submit">Update</button>
        
            </form>
        </div>
</body>
</html>