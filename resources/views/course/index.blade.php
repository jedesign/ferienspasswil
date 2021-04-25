@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-5 gap-4">
            @foreach($coursesPerDay as $day)
                <div>
                    <div>{{$day['day']->translatedFormat('l, d. F Y')}}</div>
                    <div class="flex flex-row flex-wrap bg-gray-300 h-full">
                        @if($day['morning'] || $day['afternoon'])
                            <div class="w-1/2 flex flex-col">
                                @foreach($day['morning'] as $course)
                                    <div class="bg-blue-300 border-gray-300 border-2 p-2 flex-grow">
                                        {{$course->title}}<br>
                                        {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
                                    </div>
                                @endforeach
                            </div>
                            <div class="w-1/2 flex flex-col">
                                @foreach($day['afternoon'] as $course)
                                    <div class="bg-blue-300 border-gray-300 border-2 p-2 flex-grow">
                                        {{$course->title}}<br>
                                        {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if($day['full'])
                            <div class="w-full flex flex-col">
                                @foreach($day['full'] as $course)
                                    <div class="bg-blue-300 border-gray-300 border-2 p-2 flex-grow">
                                        {{$course->title}}<br>
                                        {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
