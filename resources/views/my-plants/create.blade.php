@extends('layout')

@section('content')
    <h1>Your Space</h1>   
    <h2>My plants</h2>
    <form method="POST" action="{{ route('my-plants.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="species" placeholder="enter the name of the plant">
    </div>
    <div class="form-group">
        <label for="scientific_name">Scientific name</label>
        <input type="text" name="scientific_name" class="form-control" id="color" placeholder="enter the Scientific name of the plant">
    </div>
    <div class="form-group">
        <label for="img">Image of you plant</label>
        <input type="text" name="img" class="form-control" id="color" placeholder="enter the url of the image">
    </div>
    <div class="form-group">
        <label for="observations">Observations</label>
        <input type="text" name="observations" class="form-control" id="color" placeholder="type here">
    </div>
    <button type="submit" class="btn btn-primary">Add my plant</button>
    </form>
    <a href="{{route('my-plants.index') }}">Back to the list</a>
    @endsection
