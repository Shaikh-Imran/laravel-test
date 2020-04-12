@extends('layouts.app')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <form action="/user" method = "put" >
        <label for="email">Email address @{{ $id }}</label>
    </form>

@endsection