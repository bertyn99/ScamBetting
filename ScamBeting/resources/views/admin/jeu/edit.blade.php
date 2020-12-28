@extends('admin.admin')

@section('jeu')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-white rounded shadow-lg p-8 m-4">
        <form action={{ route('jeu.update',['id'=>$jeu->id]) }} class="mb-6" method="post">
            @csrf
            @method('PUT')
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_equipe">Nom du Jeu</label>
                <input type="text" id="nom-form" name="nom_equipe" placeholder="nomEquipe" value="{{$jeu->nom_jeu}}">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Update</button>

        </form>
        <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker"
            href="{{ route('jeu.index') }}"> Liste Jeu</a>
    </div>
</div>

@endsection