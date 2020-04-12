@extends('layouts.app')

@section('content')
   <h1>Create a Post</h1>

    {!! Form::open(['action' => 'PostController@store','method' =>'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class'=>'form-control','placeholder'=>'abc']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['id'=>'post-editor','class'=>'form-control','placeholder'=>'body']) }}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

@endsection


@section('scripts-css')
    @parent
    <script src="{{asset('/vendors/tinymce/js/tinymce/tinymce.min.js')}}"></script>

    <script>
        tinymce.init({
            selector: '#post-editor',
            menubar:false,
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak codesample',
            toolbar:  'undo redo | code | styleselect  | bold italic | alignleft aligncenter alignright alignjustify | outdent indent |codesample',
            toolbar_mode: 'floating',
            content_css : "{{asset('css/main.css')}}",
            formats: {
                'pre': { inline: 'span', styles: { color: '#00ff00'}}
            }
        });
    </script>
@endsection