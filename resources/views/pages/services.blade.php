@extends('layouts.app') 
@section('title') Services
@endsection
 
@section('content') @if(count($services) > 0)
<h2><strong>Our Services</strong></h2>
<ul class="list-group">
    @foreach ($services as $item)
    <li class="list-group-item">{{ $item }}</li>
    @endforeach
</ul>
@endif
@endsection