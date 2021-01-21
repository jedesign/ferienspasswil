@extends('layouts.dashboard.layout')

@section('heading')
    Admin
@endsection

@section('content')
        {{dd($employee)}}
{{--    <div class="col-span-6 lg:col-span-2 order-0 lg:order-1">--}}
{{--        <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Data')}}</h2>--}}
{{--        <x-guardian.card :guardian="$employee"/>--}}
{{--    </div>--}}
@endsection
