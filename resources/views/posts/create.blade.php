@extends('layouts.app') 
@section('title') Create Post
@endsection
 
@section('content')
<h2 class="h1 text-center">Create New Post</h2>
{!! Form::open(['action'=>'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {!! Form::label('title', 'Title') !!} {!! Form::text('title','',['class'=>'form-control','placeholder'=>'Post Title']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body') !!} {!! Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Post
    Body']) !!}
</div>
<div class="form-group">
    {!! Form::file('cover_image') !!}
</div>
<div class="form-group">
    {!! Form::submit('Publish',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@endsection