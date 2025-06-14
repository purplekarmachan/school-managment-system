<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ route('subjects.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Subjects</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex items-center space-y-0">
                    <h1 class="text-6xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">School Management System</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-4xl">
                        <a href="{{ route('subjects.index') }}" class="flex items-center justify-center p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                            <span class="text-xl font-semibold text-gray-700 group-hover:text-blue-600">Subjects</span>
                        </a>
                        <a href="{{ route('addresses.index') }}" class="flex items-center justify-center p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                            <span class="text-xl font-semibold text-gray-700 group-hover:text-blue-600">Addresses</span>
                        </a>
                        <a href="{{ route('courses.index') }}" class="flex items-center justify-center p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                            <span class="text-xl font-semibold text-gray-700 group-hover:text-blue-600">Courses</span>
                        </a>
                        <a href="{{ route('teachers.index') }}" class="flex items-center justify-center p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                            <span class="text-xl font-semibold text-gray-700 group-hover:text-blue-600">Teachers</span>
                        </a>
                        <a href="{{ route('students.index') }}" class="flex items-center justify-center p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                            <span class="text-xl font-semibold text-gray-700 group-hover:text-blue-600">Students</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
