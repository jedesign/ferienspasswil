@extends('layouts.base')

@section('body')
    <div class="min-h-screen bg-blue-100">
        @include('layouts.dashboard.navigation')
        <div class="py-10">
            <header>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900">
                        @yield('heading')
                    </h1>
                </div>
            </header>
            <main>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <!-- Replace with your content -->
                    <div class="px-4 py-8 sm:px-0 grid grid-cols-6 gap-12">
                        @yield('content')
                    </div>
                    <!-- /End replace -->
                </div>
            </main>
        </div>
    </div>
@endsection
