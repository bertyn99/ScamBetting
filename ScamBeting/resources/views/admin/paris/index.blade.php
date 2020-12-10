@extends('admin.admin')

@section('bet')
<h1>Paris</h1>
<a href="{{ route('bet.create') }}">ajout nouveau paris</a>
<div class="h-full w-64 rounded bg-gray-400">
    @foreach ($bets as $bet)
    <div class="text-gray-100 p-2">
       <a href="{{ route('bet.edit',['id'=>$bet->id]) }}">{{$bet->id}}</a>
       <a href="{{ route('bet.destroy',$bet->id) }}" class="text-red-400" >X</a>
    </div>
    @endforeach
</div>


@endsection