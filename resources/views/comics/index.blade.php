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
      <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>
      <form class="delete-form" action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete" type="submit" name="" value="Delete">
      </form>
      @endforeach
      <a href="{{route('comics.create')}}">Insert Your Comic</a>
    </div>
@endsection
