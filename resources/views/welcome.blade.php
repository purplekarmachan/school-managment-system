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
    <div class="flex items-center relative min-h-screen">
        @if (Route::has('login'))
            <div
                class="fixed top-0 right-0 p-4 sm:p-6 text-right z-10 w-full sm:w-auto bg-white/80 backdrop-blur-sm sm:bg-transparent">
                @auth
                    <a href="{{ route('profile.edit') }}" class="font-semibold text-gray-600 hover:text-gray-900">Hello,
                        {{ Auth::user()->name }}</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="flex flex-col items-center space-y-8">
                <h1
                    class="text-4xl sm:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent text-center">
                    School Management System</h1>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 w-full max-w-4xl">
                    <a href="{{ route('subjects.index') }}"
                        class="flex items-center justify-center p-4 sm:p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                        <span
                            class="text-lg sm:text-xl font-semibold text-gray-700 group-hover:text-blue-600">Subjects</span>
                    </a>
                    <a href="{{ route('addresses.index') }}"
                        class="flex items-center justify-center p-4 sm:p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                        <span
                            class="text-lg sm:text-xl font-semibold text-gray-700 group-hover:text-blue-600">Addresses</span>
                    </a>
                    <a href="{{ route('courses.index') }}"
                        class="flex items-center justify-center p-4 sm:p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                        <span
                            class="text-lg sm:text-xl font-semibold text-gray-700 group-hover:text-blue-600">Courses</span>
                    </a>
                    <a href="{{ route('teachers.index') }}"
                        class="flex items-center justify-center p-4 sm:p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                        <span
                            class="text-lg sm:text-xl font-semibold text-gray-700 group-hover:text-blue-600">Teachers</span>
                    </a>
                    <a href="{{ route('students.index') }}"
                        class="flex items-center justify-center p-4 sm:p-6 bg-white/80 backdrop-blur-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group">
                        <span
                            class="text-lg sm:text-xl font-semibold text-gray-700 group-hover:text-blue-600">Students</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>