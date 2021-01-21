@extends('layouts.dashboard.layout')

@section('heading')
    Dashboard
@endsection

@section('content')
    <div class="col-span-6 lg:col-span-4 order-1 lg:order-0">
        <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Children')}}</h2>
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:grid-cols-4">
            @foreach($guardian->participants as $participant)
                <x-participant.card :participant="$participant"/>
            @endforeach
            <x-participant.card-new/>
        </ul>
    </div>
    <div class="col-span-6 lg:col-span-2 order-0 lg:order-1">
        <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Data')}}</h2>
        <x-card.user :user="$guardian">
            {{$guardian->street}} {{$guardian->street_number}} <br>
            {{$guardian->postcode}} {{$guardian->city}} <br>
            {{$guardian->phone}} <br>
            {{$guardian->email}}
            <x-card.button-edit href="{{route('dashboard.profile')}}"/>
        </x-card.user>
{{--        <x-guardian.card :guardian="$guardian"/>--}}
    </div>
@endsection
