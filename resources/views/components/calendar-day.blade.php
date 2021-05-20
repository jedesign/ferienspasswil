<div class="w-full flex-shrink-0 scroll-snap-align-start md:w-auto md:scroll-snap-align-none">
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
