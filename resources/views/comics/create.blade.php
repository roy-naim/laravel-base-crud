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
  <form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" value="" placeholder="Title">
    <input type="text" name="description" value="" placeholder="Description">
    <input type="text" name="thumb" value="" placeholder="URL Image">
    <input type="number" name="price" value="" placeholder="Price">
    <input type="text" name="series" value="" placeholder="Series">
    <input type="text" name="sale_date" value="" placeholder="Sale Date">
    <input type="text" name="type" value="" placeholder="Type">

    <input type="submit" name="" value="Send">
  </form>
@endsection
