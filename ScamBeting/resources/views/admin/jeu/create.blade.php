@extends('admin.admin')

@section('jeu')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3>Créer un jeu</h3>
        <form action={{ route('jeu.store') }} class="mb-6" method="post">
            @csrf
            @method('POST')
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_jeu">Nom du Jeu</label>
                <input type="text" id="nom-form" name="nom_jeu" placeholder="Nom du jeu">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Ajouter</button>

        </form>
    </div>
</div>
@endsection