<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-lg shadow-md mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex space-x-8">
                    <a href="/" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300">
                        Home
                    </a>
                    <a href="{{ route('subjects.index') }}" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('subjects.*') ? 'text-blue-600 border-b-2 border-blue-500' : 'text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300' }}">
                        Subjects
                    </a>
                    <a href="{{ route('addresses.index') }}" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('addresses.*') ? 'text-blue-600 border-b-2 border-blue-500' : 'text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300' }}">
                       Addresses
                    </a>
                    <a href="{{ route('courses.index') }}" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('courses.*') ? 'text-blue-600 border-b-2 border-blue-500' : 'text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300' }}">
                        Courses
                    </a>
                    <a href="{{ route('teachers.index') }}" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('teachers.*') ? 'text-blue-600 border-b-2 border-blue-500' : 'text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300' }}">
                        Teachers
                    </a>
                    <a href="{{ route('students.index') }}" 
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium {{ request()->routeIs('students.*') ? 'text-blue-600 border-b-2 border-blue-500' : 'text-gray-500 hover:text-gray-700 hover:border-b-2 hover:border-gray-300' }}">
                        Students
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Card -->
        <div class="bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl overflow-hidden mb-6 p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        @yield('header-title', 'Page Title')
                    </h1>
                    <p class="text-gray-500 mt-1">@yield('header-subtitle', 'Page Subtitle')</p>
                </div>
                @yield('header-actions')
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl overflow-hidden">
            @if (session('success'))
                <div class="bg-green-100/90 border-l-4 border-green-500 p-4 mb-4" role="alert">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-green-700">{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            
            @yield('content')
        </div>
    </div>

    @stack('scripts')
</body>
</html>
