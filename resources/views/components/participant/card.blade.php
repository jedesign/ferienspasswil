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
        <h3 class="mt-5 text-gray-900 text-lg leading-5 font-medium ">{{$participant->firstname}} {{$participant->lastname}}</h3>
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
        <a href="{{route('dashboard.participant.edit', compact('participant'))}}"
           class="absolute top-0 right-0 w-8 h-8 mt-3 mr-3 text-gray-900 p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
            </svg>
        </a>
        <div x-data="{modalOpen:false}">
            <span @click="modalOpen = true"
                  class="absolute top-0 left-0 w-8 h-8 mt-3 ml-3 text-gray-900 p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors duration-150 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
            </span>
            <x-participant.delete-modal :participant="$participant"/>
        </div>
    </div>
</li>
