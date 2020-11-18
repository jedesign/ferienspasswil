@extends('layouts.dashboard.layout')

@section('heading')
    Profil
@endsection

@section('content')
    @php
        use App\Models\Guardian;
        /** @var Guardian $guardian */
    @endphp
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <livewire:guardian.edit/>
    </div>
@endsection
