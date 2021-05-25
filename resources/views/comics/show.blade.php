@extends('layouts.app')

@section('main')
  <a href="{{route('home')}}">Home</a>
  <div class="container-flex thumb-img">
    <img src="{{$comic['thumb']}}" alt="thumb-img">
  </div>
  <h2 class="container-flex uppercase">{{$comic['title']}}</h2>
  <p class="container-flex">{{$comic['description']}}</p>

  <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>
  <a class="container-flex back-button" href="{{route('comics.index')}}">Back</a>
@endsection
