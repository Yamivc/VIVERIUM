@extends('layout')

@section('content')
    <h1>Welcome to Viverium</h1>
    <div>
        <a href="{{ route('my-plants.index') }}" class="btn btn-primary">View My Plants</a>
        <a href="{{ route('my-plants.create') }}" class="btn btn-success">Add a New Plant</a>
    </div>
@endsection
