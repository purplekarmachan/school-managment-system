@extends('layouts.app')

@section('title', 'View Subject')

@section('header-title', 'Subject Details')
@section('header-subtitle', 'View subject information')

@section('header-actions')
    <div class="flex items-center space-x-3">
        @if(auth()->user()->isAdmin())
        <a href="{{ route('subjects.edit', $subject->id) }}" 
           class="group bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-150 ease-in-out shadow-md hover:shadow-lg flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
            <span>Edit Subject</span>
        </a>
        @endif
        <a href="{{ route('subjects.index') }}" 
           class="group bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-150 ease-in-out shadow-md hover:shadow-lg flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Back to List</span>
        </a>
    </div>
@endsection

@section('content')
    <div class="p-6">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-4 py-5 sm:p-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-1">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Subject Name</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $subject->name }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Created At</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $subject->created_at->format('F j, Y') }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $subject->updated_at->format('F j, Y') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
