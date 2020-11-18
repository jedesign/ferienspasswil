@extends('layouts.dashboard.layout')

@section('heading')
    Dashboard
@endsection

@section('content')
    @php
        use App\Models\Guardian;
        /** @var Guardian $guardian */
    @endphp

    <div class="col-span-6 lg:col-span-4 order-1 lg:order-0">
        <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Children')}}</h2>
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:grid-cols-4">
            @foreach($guardian->participants as $participant)
                @php /** @var App\Models\Participant $participant */ @endphp
                @php $color =  Arr::random(['pink','teal']) @endphp
                @php $shade =  Arr::random([200,300]) @endphp
                <li class="col-span-2 flex flex-col text-center bg-gradient-to-br from-{{$color}}-{{$shade}} to-{{$color}}-{{$shade +100}} rounded-lg shadow hover:shadow-md">
                    <div class="flex-1 flex flex-col p-8 relative">
                        @php
                            // https://www.flaticon.com/packs/kindergarden
                            // TODO[mr]: attribute authors (22.10.20 mr)
                        @endphp
                        <img class="w-28 h-28 flex-shrink-0 mx-auto bg-gray-200 rounded-full"
                             src="{{asset('img/avatar-'.$participant->gender.'.svg')}}"
                             alt="">
                        <h3 class="mt-5 text-gray-900 text-lg leading-5 font-medium">{{$participant->firstname}} {{$participant->lastname}}</h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                            <dt class="sr-only">Attributes</dt>
                            <dd class="mt-3">
                                <span
                                    class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full">{{$participant->birthdate->age}} Jahre</span>
                                <span
                                    class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-purple-100 rounded-full">{{$participant->school_grade}}. Klasse</span>
                                <span
                                    class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-red-100 rounded-full">{{$participant->photos_allowed?'':'keine '}}Fotos erlaubt</span>
                            </dd>
                        </dl>
                        <a href="{{route('dashboard.participant', compact('participant'))}}"
                           class="absolute top-0 right-0 w-8 h-8 mt-3 mr-3 text-gray-900 p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                        </a>
                    </div>
                </li>
            @endforeach
            @php $color =  Arr::random(['pink','teal']) @endphp
            @php $shade =  Arr::random([200,300]) @endphp
            <li class="col-span-2 flex flex-col text-center rounded-lg border-8 border-{{$color}}-{{$shade}} shadow group bg-gradient-to-br from-transparent to-transparent hover:from-{{$color}}-{{$shade}} hover:to-{{$color}}-{{$shade + 100}} hover:border-white hover:shadow-md">
                <a href="" class="flex-1 flex flex-col relative items-center justify-center p-16">
                    <span class="w-24 h-24 center text-{{$color}}-{{$shade}} group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-span-6 lg:col-span-2 order-0 lg:order-1">
        <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Data')}}</h2>
        <address
            class="col-span-2 flex flex-col bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow p-8 not-italic relative hover:shadow-md">
            <h3 class="text-gray-900 text-lg leading-5 font-medium mb-3">{{$guardian->firstname}} {{$guardian->lastname}}</h3>
            {{$guardian->street}} {{$guardian->street_number}} <br>
            {{$guardian->postcode}} {{$guardian->city}} <br>
            {{$guardian->phone}} <br>
            {{$guardian->email}}
            <a href="{{route('dashboard.profile')}}"
               class="absolute top-0 right-0 w-8 h-8 mt-3 mr-3 text-gray-900 p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                </svg>
            </a>
        </address>
    </div>
@endsection
