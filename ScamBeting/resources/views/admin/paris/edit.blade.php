@extends('admin.admin')

@section('bet')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3 class="block w-full text-center text-gray-600 mb-6">Modifier un paris</h3>
        <form action={{ route('bet.store') }} class="mb-6" method="post">
            @csrf
            @method('POST')

            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Jeu</label>
                <select id="jeu" name="jeu" autocomplete="jeu"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($jeux as $jeu)
                    @if ($bet->id_jeu == $jeu->id)
                    <option value="{{$jeu->id}}" selected>{{$jeu->nom_jeu}}</option>
                    @else
                    <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Equipe 1</label>
                <select id="equipe1" name="equipe1" autocomplete="equipe1"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @if ($bet->id_equipe == $jeu->id)
                    <option value="{{$jeu->id}}" selected>{{$jeu->nom_jeu}}</option>
                    @else
                    <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Cote equipe 1</label>
                <input type="float" class="field" id="cote-form2" name="cote_equipe1" placeholder="1.0" value="">
            </div>

            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Equipe 2</label>
                <select id="equipe2" name="equipe2" autocomplete="equipe2"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez le jeu d'abord</option>
                    @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Cote equipe 2</label>
                <input type="float" class="field" id="cote-form1" name="cote_equipe2" placeholder="1.0" value="">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Modifier</button>

        </form>
    </div>
</div>
@endsection