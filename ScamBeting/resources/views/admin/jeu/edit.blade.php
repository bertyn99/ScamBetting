@extends('admin.admin')

@section('jeu')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
        <h3 class="block w-full text-center text-gray-600 mb-6">Modifier un jeu</h3>
        <form action={{ route('jeu.update',['id'=>$jeu->id]) }} class="mb-4 md:flex md:flex-wrap md:justify-between"
            method="post">
            @csrf
            @method('PUT')
            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Nom du Jeu</label>
                <input type="text" id="nom-form" name="nom_equipe" placeholder="nomEquipe" value="{{$jeu->nom_jeu}}">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Update</button>

        </form>
        <a class="block w-full text-center no-underline text-sm text-gray-400 hover:text-gray-600"
            href="{{ route('jeu.index') }}"> Liste Jeu</a>
    </div>
</div>

@endsection