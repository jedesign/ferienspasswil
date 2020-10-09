@extends('layouts.auth')
@section('title', 'Create a new account')

@section('content')
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-16 mx-auto text-indigo-600"/>
            </a>

            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                Create a new account
            </h2>

            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Or
                <a href="{{ route('login') }}"
                   class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    sign in to your account
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label for="firstname" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Firstname') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input autocomplete="given-name"
                                   autofocus
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                   id="firstname"
                                   name="firstname"
                                   required
                                   type="text"
                                   value="{{ old('firstname') }}"/>
                        </div>

                        @error('firstname')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="lastname" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Lastname') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input autocomplete="family-name"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                   id="lastname"
                                   name="lastname"
                                   required
                                   type="text"
                                   value="{{ old('lastname') }}"/>
                        </div>

                        @error('lastname')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="street" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Street') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                id="street"
                                name="street"
                                required
                                type="text"
                                value="{{ old('street') }}"/>
                        </div>

                        @error('street')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="street_number" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Street Number') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                id="street_number"
                                name="street_number"
                                type="text"
                                value="{{ old('street_number') }}"/>
                        </div>

                        @error('street_number')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="postcode" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Postcode') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                id="postcode"
                                name="postcode"
                                required
                                type="text"
                                value="{{ old('postcode') }}"/>
                        </div>

                        @error('postcode')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="city" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('City') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                id="city"
                                name="city"
                                required
                                type="text"
                                value="{{ old('city') }}"/>
                        </div>

                        @error('city')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Phone') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                id="phone"
                                name="phone"
                                required
                                type="text"
                                value="{{ old('phone') }}"/>
                        </div>

                        @error('phone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('E-Mail Address') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input autocomplete="email"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                   id="email"
                                   name="email"
                                   required
                                   type="email"
                                   value="{{ old('email') }}"/>
                        </div>

                        @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Password') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input autocomplete="new-password"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                   id="password"
                                   name="password"
                                   required
                                   type="password"/>
                        </div>

                        @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('Confirm Password') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input autocomplete="new-password"
                                   class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                   id="password_confirmation"
                                   name="password_confirmation"
                                   required
                                   type="password"/>
                        </div>
                    </div>

                    <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            {{ __('Register') }}
                        </button>
                    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
