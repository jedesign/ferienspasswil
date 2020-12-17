@extends('layouts.dashboard.layout')

@section('heading')
    New Participant
@endsection

@section('content')
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <livewire:participant.create/>
    </div>
@endsection
