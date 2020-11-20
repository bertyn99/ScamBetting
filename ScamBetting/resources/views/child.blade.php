@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p> this is appended to the master sidebar. </p>
@endsection

@section('content')
    <p> This my body content. </p>
@endsection
    
@endsection

