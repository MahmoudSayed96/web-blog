@extends('layouts.app') 
@section('title') Posts
@endsection
 
@section('content') @if (count($posts) > 0) @foreach($posts as
$post)
<div class="well bg-light">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-sx-12">
            <img class="img-responsive" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <h2 class="h1"><a href="posts/{{ $post->id }}">{!! $post->title !!}</a></h2>
            <small>Written on <strong>{!! $post->created_at->toFormattedDateString() !!} by {!! $post->user->name!!}</strong></small>
            <p class="lead">{!! $post->body !!}</p>
        </div>
    </div>
</div>
@endforeach {{ $posts->links() }}@else
<h2 class="h1 text-center">No Posts Yet.</h2>
@endif
@endsection