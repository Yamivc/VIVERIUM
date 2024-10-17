@extends('layout')


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Plants</title>
        <link rel="icon" href="./public/vendor/viverium.ico" type="image/x-icon">
    </head>

    <body>
        <h1>List of My Plants</h1>
        <ul>
            @foreach ($my_plants as $plant)
                <li>
                    {{ $plant->name }} ({{ $plant->scientific_name }}) - <img src="{{ $plant->img }}"
                        alt="{{ $plant->name }}" width="100"> - {{ $plant->observations }}
                    <a href="{{ route('my-plants.edit', $plant->id) }}">Edit</a>

                    <form action="{{ route('my-plants.destroy', $plant->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </body>

    </html>
@endsection
