@extends('layouts.app')

@section('main')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="title" value="{{$comic->title}}" placeholder="Title">
    <input type="text" name="description" value="{{$comic->description}}" placeholder="Description">
    <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="URL Image">
    <input type="number" name="price" value="{{$comic->price}}" placeholder="Price">
    <input type="text" name="series" value="{{$comic->series}}" placeholder="Series">
    <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sale Date">
    <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">

    <input type="submit" name="" value="Send">

  </form>
@endsection
