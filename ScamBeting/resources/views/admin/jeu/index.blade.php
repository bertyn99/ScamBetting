@extends('admin.admin')

@section('jeu')

<div class=" w-full rounded ">
    <h3 class="font-bold text-center">Liste des Jeux</h3>

    <div class="w-1/6 m-1"><a href="{{ route('jeu.create') }}"
            class=" bg-blue-600 p-2 rounded text-md font-bold text-white">Ajout Jeu</a></div>

    <div class="bg-gray-200 m-2  rounded ">
        @foreach ($jeux as $jeu)
        <div class="text-gray-500 font-bold p-2 border-b flex flex-row text-gray-300 font-bold py-4">
            <div class="w-8/12">
                <a href="{{ route('jeu.edit',['id'=>$jeu->id]) }}">{{$jeu->nom_jeu}}</a>
            </div>

            <div class="w-4/12"> <a href="{{ route('jeu.edit',$jeu->id) }}"
                    class="w-24 p-1 mx-1 bg-green-400 text-white rounded ">
                    Modifier
                </a><a href="{{ route('jeu.destroy',$jeu->id) }}" class="w-24 p-1 bg-red-500 text-white rounded">
                    Supprimer
                </a></div>
        </div>
        @endforeach
    </div>

</div>
@endsection