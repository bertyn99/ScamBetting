@extends('admin.admin')

@section('equipe')
<h1> Equipes</h1>
<a href="{{ route('equipe.create') }}">ajout nouveau customer</a>
<h2>Liste des Equipes</h2>
<div class="h-full w-64 rounded bg-gray-400">
    @foreach ($equipes as $equipe)
    <div class="text-gray-100 p-2">
       <a href="{{ route('equipe.edit',['id'=>$equipe->id]) }}">{{$equipe->nom_equipe}}</a>
       <a href="{{ route('equipe.destroy',$equipe->id) }}" class="text-red-400" >X</a>
    </div>
    @endforeach
</div>


@endsection