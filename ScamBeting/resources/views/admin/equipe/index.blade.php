@extends('admin.admin')

@section('equipe')
<a href="{{ route('equipe.create') }}">ajout nouveau customer</a>
<div class="h-full w-64 rounded bg-gray-400">
    @foreach ($equipes as $equipe)
    <div class="text-gray-100 p-2">
       <a href="{{ route('equipe.edit',['id'=>$equipe->id]) }}">{{$equipe->nom_equipe}}</a>
    </div>
    @endforeach
</div>


@endsection