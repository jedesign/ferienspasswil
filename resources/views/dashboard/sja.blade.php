@extends('layouts.dashboard.layout')

@section('heading')
    Antrag auf SJA-Status
@endsection

@section('content')
    @php
        use App\Models\Guardian;
        /** @var Guardian $guardian */
    @endphp
    <!-- Payment details -->
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <section aria-labelledby="payment_details_heading">


            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Gib deine Stadt Wil Mail-Adresse ein.
                    </h3>
                    <div class="mt-2 max-w-xl text-sm text-gray-500">
                        <p>
                            Arbeitest du in der Stadt Wil im "Departement Soziales, Jugend und Alter - SJA"?
                        </p>
                        <p>
                            Möchtest du von dir betreute Kinder an den Ferienspass anmelden und dadurch die
                            Preisreduktion für sie erwirken?
                        </p>
                        <p>
                            Dann gib deine Stadt Wil Mail-Adresse ein und sende uns deine Anfrage.
                        </p>
                    </div>
                    {{-- TODO[rw/mr]: this should trigger a notification for the jugendarbeit guys (email and/or backend notification) (03.12.20 rw) --}}
                    <form class="mt-5 sm:flex sm:items-center">
                        <div class="max-w-xs w-full">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                   placeholder="you@example.com">
                        </div>
                        <button type="submit"
                                class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Send
                        </button>
                    </form>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6">
                    <span class="inline-flex rounded-md shadow-sm">
                  <a href="{{route('dashboard.profile')}}"
                     class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Back
                  </a>
                </span>
                </div>
            </div>

        </section>
    </div>
@endsection
