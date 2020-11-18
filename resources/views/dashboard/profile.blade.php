@extends('layouts.dashboard.layout')

@section('heading')
    Profil
@endsection

@section('content')
    @php
        use App\Models\Guardian;
        /** @var Guardian $guardian */
    @endphp
        <!-- Payment details -->
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            <section aria-labelledby="payment_details_heading">
                <livewire:guardian.edit/>
            </section>
        </div>
@endsection
