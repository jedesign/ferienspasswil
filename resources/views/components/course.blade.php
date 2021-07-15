@php /** @var \App\Models\Course $course */ @endphp
@props(['course'])
@php
    $bgColor = match($course->state) {
        \App\Enums\CourseState::CANCELED=>'bg-red-300 bg-striped opacity-40',
        \App\Enums\CourseState::TENTATIVE=>'bg-yellow-300 bg-opacity-50',
        default=>'bg-green-300 bg-opacity-50'
    };
@endphp
<a class="p-2 flex-grow {{$bgColor}}" href="{{route('course.show', compact('course'))}}">
    {{$course->title}}<br>
    {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
</a>
