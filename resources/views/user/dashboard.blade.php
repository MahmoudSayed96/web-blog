@extends('layouts.app') 
@section('title') Dashboard
@endsection
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="h1">Dashboard</h2>
                </div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create New Post</a>
                    <br><br>
                    <p class="lead">Your Blog Posts</p>
                    <hr>
                    <table class="table table-striped">
                        @if (count($posts) > 0)
                        <thead>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{!! $post->title !!}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                </td>
                                <td>
                                    {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'POST','class'=>'pull-right'])!!} {!!Form::hidden('_method','DELETE')!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!} {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                        <h3 class="h1 text-center">You have not posts yet.</h3>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection