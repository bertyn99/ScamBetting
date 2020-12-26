@extends('../layouts.app')

@section('content')
<section>
    <div class="container md:mx-auto">
        <div class="p-6 bg-gray-50 flex flex-col ">
        <nav class="text-white text-base font-semibold  flex flex-row w-full justify-center text-center">
            <div class="p-2 mr-1 rounded-t w-24 bg-blue-600 hover:">
                <a href="{{route('jeu.index')}}">Jeu</a>   
            </div>
            <div class="p-2 mr-1 w-24 rounded-t bg-blue-600">
                <a href="{{route('equipe.index')}}">Equipe</a>         
            </div>
            <div class="p-2 mr-1 w-24 rounded-t bg-blue-600">
                <a href="{{route('bet.index')}}">Paris</a>
            </div>
        </nav>  
        <div class="bg-white w-5/6 mx-auto">
                @yield('equipe')

            @yield('jeu')
            @yield('bet')
        </div>
    </div>
       
    </div>
    
</section>

           
</div>

    

@endsection