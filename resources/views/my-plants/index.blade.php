@extends('layout')

<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
</head>

@section('content')
    <h1 class="text-2xl font-bold mb-5">List of My Plants</h1>

    <div class="text-center p-10">
        <h1 class="font-bold text-4xl mb-4">My Space</h1>
        <h1 class="text-3xl">Plants List</h1>
    </div>


    <section id="grid"
        class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
        @foreach ($my_plants as $plant)
            <!--  cards - Starts Here 👇 -->
            <div class="w-72 h-auto bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">



                <img src="{{ $plant->img }}" alt="{{ $plant->name }}" alt="MyPlant"
                    class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 max-w-72 h-auto text-wrap">
                    <span class="text-gray-400 mr-3 uppercase text-xs">{{ $plant->scientific_name }}</span>
                    <p class="text-lg font-bold text-black truncate block capitalize my-2">{{ $plant->name }}</p>

                    <p class="text-md font-regular text-black my-1 mx-2">Observations:</p>
                    <p class="text-gray-600 mt-1 text-left mx-2 truncate line-clamp-3">
                        {{ Str::limit($plant->observations, 300) }} </p>


                    <form action="{{ route('my-plants.destroy', $plant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this plant?')"
                            class="flex items-center justify-end ">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                class="w-5 h-5 text-red-500 mx-2 my-5">
                                <path
                                    d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                            </svg>
                        </button>


                    </form>

                    <div class=" flex justify-between items-center">
                        <a href="{{ route('my-plants.edit', $plant->id) }}" class="text-blue-500 hover:underline">Edit
                        </a>
                    </div>


                </div>


            </div>
        @endforeach
    </section>
