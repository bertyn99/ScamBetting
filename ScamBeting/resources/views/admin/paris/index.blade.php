@extends('admin.admin')

@section('bet')
<div class=" w-full rounded ">
    <h3 class="font-bold text-center">Liste des Paris</h3>

    <div class="w-1/6 m-1"><a href="{{ route('bet.create') }}"
            class=" bg-blue-600 p-2 rounded text-md font-bold text-white">ajout nouveau paris</a></div>

    <div class="bg-gray-200 m-2  rounded ">
        @foreach ($bets as $bet)
        <div class="text-gray-500 font-bold p-2 border-b flex flex-row text-gray-300 font-bold py-4">
            <div class="w-8/12 flex flex-col">
                <a href="{{ route('bet.edit',['id'=>$bet->id]) }}">
                    {{$bet->equipes[0]->nom_equipe }} vs {{$bet->equipes[1]->nom_equipe}}
                </a>
                <span>{{$bet->equipes[0]->pivot->cote}} {{$bet->equipes[1]->pivot->cote}}</span>
            </div>

            <div class="w-4/12"> <a href="{{ route('bet.edit',$bet->id) }}"
                    class="w-24 p-1 mx-1 bg-green-400 text-white rounded ">
                    Modifier
                </a><a href="{{ route('bet.destroy',$bet->id) }}" class="w-24 p-1 bg-red-500 text-white rounded">
                    Supprimer
                </a></div>
        </div>
        @endforeach
    </div>


</div>


@endsection