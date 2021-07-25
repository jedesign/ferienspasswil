@extends('layouts.dashboard.layout')

@section('heading')
    {{ __('Courses') }}
@endsection

@section('content')

    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
        <a href="{{ route('admin.course.create') }}"
           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10"
        >
            {{ __('New') }}
        </a>
    </div>


@endsection
