@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-5 gap-4">
            @foreach($coursesPerDay as $day)
                <div>
                    <div>{{$day['day']->translatedFormat('l, d. F Y')}}</div>
                    @if($day['courses'])
                        <div class="flex flex-row h-32">
                            @foreach($day['courses'] as $course)
                                <div class="bg-blue-300 border-gray-300 border-2 p-2 {{$course->daySpan === 'full' ? 'h-full' : 'h-1/2'}} {{$course->daySpan === 'afternoon' ? 'self-end':''}}
                                    ">
                                    {{$course->title}}<br>
                                    {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
