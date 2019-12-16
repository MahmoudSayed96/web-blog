@extends('layouts.app') 
@section('content')
<a href="/posts" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
<br><br>
<div class="well bg-light">
    <img class="img-responsive" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <h2 class="h1">{!!$post->title !!}</h2>
    <small>Written on <strong>{!! $post->created_at->toFormattedDateString() !!} by {!! $post->user->name!!}</strong></small>
    <hr>
    <p class="lead">{!! $post->body !!}</p>
</div>
@if (!Auth::guest()) @if (auth()->user()->id === $post->user_id)
<hr>
<div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> {!!Form::open(['action'=>['PostsController@destroy',$post->id],
    'method'=>'POST','class'=>'pull-right'])!!} {!!Form::hidden('_method','DELETE')!!} {!!Form::submit('Delete',['class'=>'btn
    btn-danger'])!!} {!!Form::close()!!}
</div>
<br><br> @endif @endif
@endsection