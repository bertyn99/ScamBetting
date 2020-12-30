@extends('layouts.app')

@section('content')
<div class="w-1/2 shadow-lg rounded mx-auto p-4  text-center">
    <h1 class="font-bold text-gray-800 text-3xl mb-4">Votre depot à bien été pris en compte </h1>

    <a href="{{ url('/')}}" class=" "><button class="p-4 bg-blue-500 font-bold text-white ">
            Accueil</button></a>
</div>

@endsection