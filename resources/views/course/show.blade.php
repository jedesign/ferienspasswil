@extends('layouts.app')

@section('content')
    @php /* @var \App\Models\Course $course */@endphp
    {{-- // TODO[mr]: Push anchor (e.g. #07-07-2020) to calendar day in history on back (20.05.21 mr) --}}
    <h1>{{$course->title}}</h1>
    @auth()
        <span
            class="inline-block p-6 bg-green-400 text-gray-900 rounded-full hover:bg-red-300 transition transition-colors hover:duration-200 duration-1000">Eingeloggt</span>
    @endauth
    <dl>
        <dt>Description</dt>
        <dd>{{$course->description}}</dd>

        <dt>State</dt>
        <dd>{{$course->state}}</dd>

        <dt>State Message</dt>
        <dd>{{$course->state_message}}</dd>

        <dt>Beginning</dt>
        <dd>{{$course->beginning->format('d.m.Y H:i')}}</dd>

        <dt>End</dt>
        <dd>{{$course->end->format('d.m.Y H:i')}}</dd>

        <dt>Min. Participants</dt>
        <dd>{{$course->min_participants}}</dd>

        <dt>Max. Participants</dt>
        <dd>{{$course->max_participants}}</dd>

        <dt>Grade</dt>
        <dd>{{$course->grade_group}}</dd>

        <dt>Meeting Point</dt>
        <dd>{{$course->meeting_point}}</dd>

        <dt>Clothes</dt>
        <dd>{{$course->clothes}}</dd>

        <dt>Bring alongs</dt>
        <dd>{{$course->bring_alongs}}</dd>

        <dt>Price</dt>
        <dd>{{$course->price}}</dd>
    </dl>
@endsection
