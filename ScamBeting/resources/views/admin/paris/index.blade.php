@extends('admin.admin')

@section('bet')
<a href="{{ route('bet.create') }}">ajout nouveau paris</a>

<div class="bg-gray-200 m-2  rounded ">
    @foreach ($bets as $bet)
    <div class="text-gray-500 font-bold p-2 border-b flex flex-row text-gray-300 font-bold py-4">
        <div class="w-8/12">
            <a href="{{ route('bet.edit',['id'=>$bet->id]) }}">{{$bet->id_equipe_1}} vs {{$bet->id_equipe_2}}</a>
        </div>

        <div class="w-4/12"> <a href="{{ route('bet.update',$bet->id) }}" class="w-24 p-1 mx-1 bg-green-400 text-white rounded ">
                Modifier
            </a><a href="{{ route('bet.destroy',$bet->id) }}" class="w-24 p-1 bg-red-500 text-white rounded">
                Supprimer
            </a></div>
    </div>
    @endforeach
</div>


@endsection