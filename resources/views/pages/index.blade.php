@extends('layouts.app') 
@section('title') Home
@endsection
 
@section('content')
<div class="jumbotron text-center">
    <h1>Welcome To WebBlog Website</h1>
    <p>This website interested in publishing blogs and posts about <br> <strong>web Design</strong> and <strong>Web Development</strong></p>
    <div>
        @if (Auth::guest())
        <a href="/login" class="btn btn-primary">Login</a>
        <a href="/register" class="btn btn-success">Register</a> @endif
    </div>
</div>
@endsection