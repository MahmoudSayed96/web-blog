@extends('layouts.app') 
@section('title') Edit Post
@endsection
 
@section('content')
<h2 class="h1 text-center">Edit Post</h2>
{!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {!! Form::label('title', 'Title') !!} {!! Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Post Title'])
    !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body') !!} {!! Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Post
    Body']) !!}
</div>
<div class="form-group">
    {!! Form::file('cover_image') !!}
</div>
{!!Form::hidden('_method','PUT')!!}
<div class="form-group">
    {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
</div>
{!! Form::close() !!}
@endsection