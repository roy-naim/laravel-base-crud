@extends('layouts.app')

@section('main')
  <div class="container-flex">
    @foreach ($comics as $index => $comic)
      <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="card">
        <div>
          <div class="thumb-img">
            <img src="{{$comic['thumb']}}" alt="thumb-img">
          </div>
          <h4>{{$comic['series']}}</h4>
        </div>
      </a>
      @endforeach
      <a href="{{route('comics.create')}}">Insert Your Comic</a>
    </div>
@endsection
