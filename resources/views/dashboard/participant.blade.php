@extends('layouts.dashboard.layout')
@php
    use App\Models\Participant;
    /** @var Participant $participant */
@endphp

@section('heading')
    {{$participant->firstname}} {{$participant->lastname}}
@endsection

@section('content')
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <livewire:participant.edit :participant="$participant"/>
    </div>
@endsection
