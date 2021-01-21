@extends('layouts.dashboard.layout')

@section('heading')
    Admin
@endsection

@section('content')
        <div class="col-span-6 lg:col-span-4 order-1 lg:order-0">
            <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('future stuff 🐟')}}</h2>
            <!-- TODO: add stuff to manage (21.01.21 rw) -->
        </div>
        <div class="col-span-6 lg:col-span-2 order-0 lg:order-1">
            <h2 class="text-2xl font-bold leading-tight text-gray-700 mb-6">{{__('Your Data')}}</h2>
            <!-- TODO: add user-card with $employee (21.01.21 rw) -->
        </div>
@endsection
