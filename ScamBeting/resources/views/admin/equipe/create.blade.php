@extends('admin.admin')

@section('equipe')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3>Créer un paris</h3>
        <form action={{ route('equipe.store') }} class="mb-6" method="post">
            @csrf
            @method('POST')
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_equipe">Nom de
                    l'equipe</label>
                <input type="text" id="nom-form" name="nom_equipe" placeholder="nomEquipe">
            </div>

            <div class="flex flex-col mb-4">
                <select id="jeu" name="jeu" autocomplete="jeu"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($jeux as $jeu)
                    <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
                    @endforeach
                </select>
            </div>


            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Ajouter</button>

        </form>
    </div>
</div>
@endsection