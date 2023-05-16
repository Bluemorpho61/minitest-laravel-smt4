<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            border: 1px solid red;
        }
    </style>
    <title>Minitest Web Framework</title>
</head>
<body>
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center">
            @if(Route::has('login'))
                @auth
                    <a class="text-sm text-blue-600 dark:text-blue-500 hover:underline" href="{{url('/home')}}">Dashboard</a>
                @else
                    <a class="text-sm text-blue-600 dark:text-blue-500 hover:underline" href="{{route('login')}}">Login</a>
                @endauth
                @if(Route::has('register'))
                    <a href="{{route('register')}}" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Register</a>
                @endif
            @endif
            {{--            <a href="/" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Login</a>--}}
        </div>
    </div>
</nav>

<div class="mt-5 p-6 min-w-full space-y-6">
@yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
