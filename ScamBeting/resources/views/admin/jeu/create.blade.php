@extends('admin.admin')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('jeu')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3>Créer un jeu</h3>
        <form action={{ route('jeu.store') }} class="mb-4 md:flex md:flex-wrap md:justify-between" method="post">
            @csrf
            @method('POST')
            <div class="field-group mb-4 md:w-1/2">
                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="nom_jeu">Nom du Jeu</label>
                <input type="text" id="nom-form" name="nom_jeu" placeholder="Nom du jeu">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Ajouter</button>

        </form>
    </div>
</div>
@endsection