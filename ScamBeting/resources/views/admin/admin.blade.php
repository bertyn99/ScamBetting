@extends('../layouts.app')

@section('content')

<div class="grid grid-rows-1">
    <div class="h-12 bg-purple-300 "> vous etes un admin</div>
</div>

@if(Route::has('equipe')){
@yield('equipe');
}else if(Route::has('equipe/create')){
@yield('create');
}else if(Route::has('equipe/edit')){
@yield('edit');
}
@endif
@endsection