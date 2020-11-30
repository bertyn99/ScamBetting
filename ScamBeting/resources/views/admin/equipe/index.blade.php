@extends('admin.admin')

@section('index')
<div class="h-full w-64 rounded bg-gray-400">
    @foreach ($equipe as $equipes)
        <div class="text-gray-100 p-2">
            {{$equipe}}
        </div>
    @endforeach
</div>
    

@endsection