@extends('layout')

@section('content')
    <h1>Edit Plant</h1>
    <form method="POST" action="{{ route('my-plants.update', $plant->id) }}">
        @csrf
        @method('PUT') <!-- Necesario para que Laravel entienda que es una actualización -->


        <div class="form-group">
            <label for="img">Image (URL)</label>
            <input type="text" name="img" class="form-control" value="{{ $plant->img }}" required>
        </div>

        <div class="form-group">
            <label for="observations">Observations</label>
            <input type="text" name="observations" class="form-control" value="{{ $plant->observations }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Plant</button>
    </form>
    <a href="{{ route('my-plants.index') }}">Back to list</a>
@endsection
