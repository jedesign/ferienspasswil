@php /** @var \App\Models\Course $course */ @endphp
@props(['course'])
@php
$bgColor = match($course->state) {
    \App\Enums\CourseState::CANCELED=>'bg-red-300',
    \App\Enums\CourseState::TENTATIVE=>'bg-yellow-300',
    default=>'bg-blue-300'
};
@endphp
<div class="p-2 flex-grow {{$bgColor}} bg-opacity-50">
    {{$course->title}}<br>
    {{$course->beginning->format('H:i')}} – {{$course->end->format('H:i')}}
</div>
