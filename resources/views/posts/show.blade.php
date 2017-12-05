@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="col-sm-8 blog-main">
      <h1> {{$post->title}} </h1>

      {{$post->body}}
    </div>
  </div>
@endsection