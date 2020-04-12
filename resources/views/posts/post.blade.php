@extends('layouts.app')

@section('content')
    <a href = "\posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Created on {{ $post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a>
    @endif
@endsection