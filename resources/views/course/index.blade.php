@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 px-2 sm:px-6 lg:px-8">
        <div class="flex flex-row flex-nowrap overflow-x-auto scroll-snap-mandatory-x
                    md:grid md:grid-cols-2 md:gap-4 md:overflow-x-auto md:scroll-snap-none
                    xl:grid-cols-3 2xl:grid-cols-5">
            @foreach($coursesPerDay as $day)
                <x-calendar-day :day="$day"/>
            @endforeach
        </div>
    </div>
@endsection
