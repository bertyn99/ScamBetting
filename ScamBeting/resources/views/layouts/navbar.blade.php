<style>
    .scroll-hidden::-webkit-scrollbar {
        height: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }
</style>

<header>
    <!-- @if(Route::has('login'))
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
@endif -->
    <nav class="bg-blue-500 shadow-2xl">
        <div class="container mx-auto px-6 py-3">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <a class="text-white text-xl font-bold md:text-2xl hover:text-white" href="/">Scam Betting</a>

                        <!-- Search input on desktop screen -->
                        <div class="mx-10 hidden md:block">
                            <input type="text"
                                class="w-32 lg:w-64 px-4 py-3 leading-tight text-sm text-white bg-gray-100 rounded-md placeholder-gray-500 border border-transparent focus:outline-none focus:bg-white focus:shadow-outline focus:border-blue-400"
                                placeholder="Rechercher" aria-label="Rechercher">
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button"
                            class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="hidden md:flex items-center">
                    <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                        <a class="my-1 text-sm text-white leading-5 hover:text-blue-600 no-underline hover:underline md:mx-4 md:my-0"
                            href="#">Accueil</a>
                        <a class="my-1 text-sm text-white leading-5 hover:text-blue-600 hover:underline md:mx-4 md:my-0"
                            href="#">E-Sports</a>
                        <a class="my-1 text-sm text-white leading-5 hover:text-blue-600 hover:underline md:mx-4 md:my-0"
                            href="#">Match en live</a>
                    </div>

                    <div class="flex items-center py-2 -mx-1 md:mx-0">
                        @guest
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <div class="ml-3 relative ">
                            <div class="flex flex-row ">
                                <div class="flex flex-col mr-3 text-center">
                                    <span class="font-bold text-gray-300 text-md">{{ Auth::user()->name }}</span>
                                    <span class="font-bold text-gray-100 text-md">{{ Auth::user()->balance }} €</span>
                                </div>
                                <button
                                    class="btn-user focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="avatar bg-white"
                                        src="https://img.icons8.com/cotton/64/000000/gender-neutral-user--v3.png"
                                        alt="">
                                </button>
                            </div>
                            <!--
                                    Profile dropdown panel, show/hide based on dropdown state.

                                    Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                    Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
                            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu" hidden>
                                @if(Auth::user()->isAdmin == 1)
                                <a href="{{url('admin')}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Dashboard</a>

                                @else
                                <a href="{{url('profile')}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Profile</a>
                                @endif
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Parametre</a>
                                {{--  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ Auth::user()->name }}
                                {{ Auth::user()->isAdmin }}</a> --}}
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        <!-- <span>{{ Auth::user()->name }}</span> -->

                        <!--   <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form> -->
                        @endguest
                    </div>

                    <!-- Search input on mobile screen -->
                    <div class="mt-3 md:hidden">
                        <input type="text"
                            class="w-full px-4 py-3 leading-tight text-sm text-white bg-gray-100 rounded-md placeholder-gray-500 focus:outline-none focus:bg-white focus:shadow-outline"
                            placeholder="Rechercher" aria-label="Rechercher">
                    </div>
                </div>
            </div>

            <div class="mt-3 py-3 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
                <a class="text-sm text-white leading-5 hover:text-blue-600 hover:underline mx-4 md:my-0"
                    href="{{route('home.jeu',"heartsone")}}">Heartsone</a>
                <a class="text-sm text-white leading-5 hover:text-blue-600 hover:underline mx-4 md:my-0"
                    href="{{route('home.jeu',"counter-strike")}}">Counter-Strike</a>
                <a class="text-sm text-white leading-5 hover:text-blue-600 hover:underline mx-4 md:my-0"
                    href="{{route('home.jeu',"league-of-legends")}}">League
                    of Legends</a>
                <a class="text-sm text-white leading-5 hover:text-blue-600 hover:underline mx-4 md:my-0"
                    href="{{route('home.jeu',"valorant")}}">Valorant</a>
                <a class="text-sm text-white leading-5 hover:text-blue-600 hover:underline mx-4 md:my-0"
                    href="{{route('home.jeu',"rainbow-6-siege")}}">Rainbow 6 Siege</a>

            </div>
        </div>
    </nav>
</header>

@push('script')
<script>
    document.querySelector('.btn-user').addEventListener('click', e => {
        document.querySelector('[aria-labelledby="user-menu"]').toggleAttribute('hidden')
    })
</script>
@endpush