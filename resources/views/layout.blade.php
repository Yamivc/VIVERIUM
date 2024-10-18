<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viverium - Tu espacio de plantas</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <link rel="icon" href="{{ asset('vendor/viverium.ico') }}" type="image/x-icon">


<body>

    <header>
        <h1>Viverium</h1>
        <p>Tu espacio personal para cultivar y cuidar tus plantas</p>
    </header>



    <nav
        class="bg-gray-700 dark:bg-lime-500 fixed w-full z-20 top-0 start-0 border-b border-green-200 dark:border-green-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="vendor/viverium.ico" class="h-8" alt="Viverium Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Viverium</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-400">Get
                    started</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-200 dark:text-gray-400 dark:hover:bg-green-700 dark:focus:ring-green-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-green-100 rounded-lg bg-green-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-700 dark:bg-lime-500 md:dark:bg-lime-500 dark:border-green-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('my-plants.index') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-green-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-green-700">My
                            Plants</a>
                    </li>
                    <li>
                        <a href="{{ route('my-plants.create') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-green-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-green-700">Add
                            Plants</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>

        @yield('content')

    </main>



    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/"
                class="hover:underline">Viverium</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="/" class="hover:underline me-4 md:me-6">Home</a>
            </li>
            <li>
                <a href="{{ route('my-plants.index') }}" class="hover:underline me-4 md:me-6">My Plants</a>
            </li>
            <li>
                <a href="{{ route('my-plants.create') }}" class="hover:underline me-4 md:me-6">Add Plant</a>
            </li>
            <li>
                <a href="https://github.com/Yamivc" class="hover:underline">Git Hub</a>
            </li>
        </ul>
    </footer>


  


</body>

</html>
