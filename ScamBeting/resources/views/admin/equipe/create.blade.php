@extends('admin.admin')

@section('create')
<div class="h-full w-64 rounded bg-gray-400">
<form action={{ route('equipe.store', ['id'=>1]) }} method="post">
        @csrf
    </form>
</div>
    

@endsection