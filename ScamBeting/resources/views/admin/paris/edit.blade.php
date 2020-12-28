@extends('admin.admin')

@section('bet')
<div class="h-full w-full rounded flex flex-row justify-center py-5">
    <h1>Modification Equipe</h1>
    <a href="{{ route('jeu.index') }}">accueil customers</a>
    <form action={{ route('jeu.update',['id'=>$jeu->id]) }} class="flex flex-col w-64  " method="post">
        @csrf
        @method('PUT')
        <input type="text" class="h-12 border" name="nom_jeu" value="{{$jeu->nom_jeu}}" placeholder="nom du Jeu">

        <button class="bg-blue-400 rounded" type="submit">Update</button>

    </form>
</div>