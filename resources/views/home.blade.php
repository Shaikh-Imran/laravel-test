@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DashBoard</div>

                <div class="card-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <hr>
                        @if(count($posts)>0)
                            <h3>Your Posts</h3>
                        
                            <table class="table table-stripped">
                                <tr>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                    <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <h3>You have no Posts</h3>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
