@php /** @var \App\Models\Course $course */ @endphp
@props(['course'])
<div class="p-2 flex-grow {{$course->canceled ? 'bg-red-300' : 'bg-blue-300'}} bg-opacity-50">
    {{$course->title}}<br>
    {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
</div>
