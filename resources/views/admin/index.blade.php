@extends('layouts.dashboard.layout')

@section('heading')
    {{ __('Admin') }}
@endsection

@section('content')
        <div class="col-span-6 lg:col-span-4 order-1 lg:order-0">
            <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Manage')}}</h2>

            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                <a href="{{ route('admin.courses') }}"
                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10"
                >
                    {{ __('Courses') }}
                </a>
            </div>

        </div>
        <div class="col-span-6 lg:col-span-2 order-0 lg:order-1">
            <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Data')}}</h2>
            <!-- TODO: add user-card with $employee (21.01.21 rw) -->
        </div>
@endsection
