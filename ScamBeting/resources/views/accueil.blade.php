<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scam Betting</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <p class="bg-gray-300 text-center">Famille, vie sociale, santé financière. Etes-vous prêt à tout miser ?
Pour être aidé, appelez le 09-74-75-13-13
</p>
    <header>
        <div class="flex pl-5 m-2 space-x-6">
                <ul class="contents flex-row justify-start space-x-6 ">
                    <li><a href="#" class="">Accueil</a></li>
                    <li><a href="#">E-sports</a></li>
                    <li><a href="#">Match en live</a></li>
                   
                </ul>
                @if(Route::has('login'))
                    <div class="contents flex-row justify-end space-x-4">
                        @auth
                            <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                            @endif
                        @endauth
                    </div>
                @endif
                

        
        </div>
            

    </header>



    <footer class="bg-gray-300 text-center">
        <p>Scam betting est un projet étudiant de paris e-sportifs fictif en ligne.</p>
    </footer>

</body>

</html>
