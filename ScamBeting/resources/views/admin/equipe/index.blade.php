@extends('admin.admin')

@section('equipe')
<div class=" w-full rounded ">
    <h3 class="font-bold text-center">Liste des Equipes</h3>

    <div class="w-1/6 m-1"><a href="{{ route('equipe.create') }}"
            class=" bg-blue-600 p-2 rounded text-md font-bold text-white">Ajout Equipe</a></div>

    <div class="bg-gray-200 m-2  rounded ">
        @foreach ($equipes as $equipe)
        <div class="text-gray-500 font-bold p-2 border-b flex flex-row text-gray-300 font-bold py-4">
            <div class="w-8/12">
                <a href="{{ route('equipe.edit',['id'=>$equipe->id]) }}">{{$equipe->nom_equipe}}</a>
            </div>

            <div class="w-4/12"> <a href="{{ route('equipe.edit',$equipe->id) }}"
                    class="w-24 p-1 mx-1 bg-green-400 text-white rounded ">
                    Modifier
                </a><a href="{{ route('equipe.destroy',$equipe->id) }}" class="w-24 p-1 bg-red-500 text-white rounded">
                    Supprimer
                </a></div>
        </div>
        @endforeach
    </div>

</div>


@endsection