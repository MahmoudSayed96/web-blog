@extends('layouts.app') 
@section('title') Profile
@endsection
 
@section('content')
<div class="well bg-light">
    <h2 class="h1 text-center"><strong>Profile Settings</strong></h2>
    <div class="row">
        {!! Form::open(['route'=>['user.update'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="form-group">
                {!! Form::label('name','Your Name')!!} {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email Address')!!} {!! Form::text('email',$user->email,['class'=>'form-control','disabled'=>'disabled'])
                !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
            <h3>YOUR AVATAR</h3>
            <img width="100px" class="img-responsive img-circle img-thumbnail" src="/storage/profile_images/{{$user->profile_image}}"
                alt="avatar">
            <br><br>
            <div class="form-group">
                {!! Form::file('profile_image')!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection