@extends('admin.admin')

@section('bet')
<div class="h-full w-full rounded flex justify-center py-5">
    <form action={{ route('bet.store') }} class="flex flex-col w-64  " method="post">
        @csrf
        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
        <select id="jeu" name="jeu" autocomplete="jeu"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach ($jeux as $jeu)
            <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
            @endforeach
        </select>
        <select id="country" name="id_equipe_1" autocomplete="id_equipe_1"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach ($equipes as $equipe)
            <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
            @endforeach
        </select>
        <select id="country" name="id_equipe_2" autocomplete="id_equipe_2"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach ($equipes as $equipe)
            <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
            @endforeach
        </select>
        <input type="number" class="h-12 border " name="cote_1" placeholder="Rentrez la côte pour l'équipe 1">
        <input type="number" class="h-12 border " name="cote_2" placeholder="Rentrez la côte pour l'équipe 2">

        <button class="bg-blue-400 rounded" type="submit">Envoyer</button>

    </form>
</div>