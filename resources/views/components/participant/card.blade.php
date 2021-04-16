{{-- from-pink-200 from-pink-300 to-pink-300 to-pink-400 --}}
{{-- from-teal-200 from-teal-300 to-teal-300 to-teal-400 --}}
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
             alt="avatar-{{$participant->gender}}">
        <h3 class="mt-5 text-gray-900 text-lg leading-5 font-medium ">{{$participant->firstname}} {{$participant->lastname}}</h3>
        <x-participant.card.badge-list :participant="$participant"/>
        <x-card.button-edit href="{{route('dashboard.participant.edit', compact('participant'))}}"/>
        <x-participant.card.button-delete :participant="$participant"/>
    </div>
</li>
