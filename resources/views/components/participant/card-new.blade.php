{{-- border-pink-200 border-pink-300 hover:from-pink-200 hover:from-pink-300 hover:to-pink-300 hover:to-pink-400 text-pink-200 text-pink-300 --}}
{{-- border-teal-200 border-teal-300 hover:from-teal-200 hover:from-teal-300 hover:to-teal-300 hover:to-teal-400 text-teal-200 text-teal-300 --}}
@php $color =  Arr::random(['pink','teal']) @endphp
@php $shade =  Arr::random([200,300]) @endphp
<li class="col-span-2 flex flex-col text-center rounded-lg border-8 border-{{$color}}-{{$shade}} shadow group bg-gradient-to-br from-transparent to-transparent hover:from-{{$color}}-{{$shade}} hover:to-{{$color}}-{{$shade + 100}} hover:border-white hover:shadow-md">
    <a href="{{route('dashboard.participant.create')}}"
       class="flex-1 flex flex-col relative items-center justify-center p-16">
                    <span class="w-24 h-24 center text-{{$color}}-{{$shade}} group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
    </a>
</li>
