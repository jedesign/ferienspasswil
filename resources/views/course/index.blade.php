@extends('layouts.app')

@section('content')
    {{-- TODO[mr]: maybe this: https://codepen.io/chriscoyier/pen/pMRgwW (25.04.21 mr) --}}
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5 gap-4 ">
            @foreach($coursesPerDay as $day)
                <div>
                    <div class="font-bold text-center mb-2">{{$day['day']->translatedFormat('l, d. F Y')}}</div>

                    <div class="relative p-2">
                        <x-calendar-day-spans/>
                        <div class="flex flex-row relative z-10 mb-2">
                            <div class="w-1/2 text-center pr-3 text-gray-300">Morgen</div>
                            <div class="w-1/2 text-center pl-3 text-gray-300">Nachmittag</div>
                        </div>

                        <div class="flex flex-row flex-wrap relative z-10 -mb-1">
                            @if($day['morning'] || $day['afternoon'])
                                <div class="w-1/2 flex flex-col space-y-1 pr-3 pb-1">
                                    @foreach($day['morning'] as $course)
                                        <x-course :course="$course"/>
                                    @endforeach
                                </div>
                                <div class="w-1/2 flex flex-col space-y-1 pl-3 pb-1">
                                    @foreach($day['afternoon'] as $course)
                                        <x-course :course="$course"/>
                                    @endforeach
                                </div>
                            @endif
                            @if($day['full'])
                                <div class="w-full flex flex-col space-y-1 pb-1">
                                    @foreach($day['full'] as $course)
                                        <x-course :course="$course"/>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
