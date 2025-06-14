@extends('layouts.app')

@section('title', 'Create Teacher')

@section('header-title', 'Create Teacher')
@section('header-subtitle', 'Add a new teacher to the system')

@section('header-actions')
    <a href="{{ route('teachers.index') }}" 
       class="group bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-150 ease-in-out shadow-md hover:shadow-lg flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        <span>Back to List</span>
    </a>
@endsection

@section('content')
    <div class="p-6">
        <form method="POST" action="{{ route('teachers.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('first_name') border-red-500 @enderror" 
                           id="first_name" 
                           name="first_name" 
                           value="{{ old('first_name') }}" 
                           required
                           placeholder="Enter first name">
                    @error('first_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('last_name') border-red-500 @enderror" 
                           id="last_name" 
                           name="last_name" 
                           value="{{ old('last_name') }}" 
                           required
                           placeholder="Enter last name">
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                    <input type="date" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('date_of_birth') border-red-500 @enderror" 
                           id="date_of_birth" 
                           name="date_of_birth" 
                           value="{{ old('date_of_birth') }}" 
                           required>
                    @error('date_of_birth')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="address_id" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                    <select name="address_id" 
                            id="address_id" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('address_id') border-red-500 @enderror"
                            required>
                        <option value="">Select an address</option>
                        @foreach($addresses as $address)
                            <option value="{{ $address->id }}" {{ old('address_id') == $address->id ? 'selected' : '' }}>
                                {{ $address->name }} {{ $address->number }}, {{ $address->city }}
                            </option>
                        @endforeach
                    </select>
                    @error('address_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" 
                        class="group bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-150 ease-in-out shadow-md hover:shadow-lg flex items-center space-x-2">
                    <span>Create Teacher</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
@endsection 