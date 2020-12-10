@extends('admin.admin')

@section('jeu')
<h1>Jeux</h1>
<a href="{{ route('jeu.create') }}">ajout nouveau jeu</a>
<div class="h-full w-64 rounded bg-gray-400">
    @foreach ($jeux as $jeu)
    <div class="text-gray-100 p-2">
       <a href="{{ route('jeu.edit',['id'=>$jeu->id]) }}">{{$jeu->nom_jeu}}</a>
       <a href="{{ route('jeu.destroy',$jeu->id) }}" class="text-red-400" >X</a>
    </div>
    @endforeach
</div>


@endsection