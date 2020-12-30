@extends('admin.admin')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('equipe')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-white rounded shadow-lg p-8 m-4">
        <form action={{ route('equipe.update',['id'=>$equipe->id]) }} class="mb-6" method="post">
            @csrf
            @method('PUT')
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_equipe">Nom de
                    l'equipe</label>
                <input type="text" id="nom-form" name="nom_equipe" placeholder="nomEquipe"
                    value="{{$equipe->nom_equipe}}">
            </div>

            <div class="flex flex-col mb-4">
                <select id="jeu" name="jeu" autocomplete="jeu"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($jeux as $jeu)

                    @if ($equipe->id_jeu == $jeu->id)
                    <option value="{{$jeu->id}}" selected>{{$jeu->nom_jeu}}</option>
                    @else
                    <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
                    @endif

                    @endforeach
                </select>
            </div>


            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Update</button>

        </form>
        <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker"
            href="{{ route('equipe.index') }}"> Liste equipe</a>
    </div>
</div>

@endsection