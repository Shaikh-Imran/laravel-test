@extends('layouts.app')

@section('content')
   <h1>Create a Post</h1>

    {!! Form::open(['action' => ['PostController@update',$post->id],'method' =>'POST']) !!}
        @method('PUT')
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'abc']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {!! Form::textarea('body', $post->body, ['id'=>'post-editor','class'=>'form-control','placeholder'=>'body']) !!}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

@endsection

@section('scripts-css')
    @parent
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>

    <script>
        CKEDITOR.replace( 'post-editor' );
    </script>
@endsection