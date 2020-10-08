<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <x-jet-validation-errors class="mb-4"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="firstname" value="{{ __('Firstname') }}"/>
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                             :value="old('firstname')" required autofocus autocomplete="firstname"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="lastname" value="{{ __('Lastname') }}"/>
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                             :value="old('lastname')" required autocomplete="lastname"/>
            </div>


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                             required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}"/>
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                             :value="old('phone')" required autocomplete="phone"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="street" value="{{ __('Street') }}"/>
                <x-jet-input id="street" class="block mt-1 w-full" type="text" name="street"
                             :value="old('street')" required autocomplete="street"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="street_number" value="{{ __('Street Number') }}"/>
                <x-jet-input id="street_number" class="block mt-1 w-full" type="text" name="street_number"
                             :value="old('street_number')" autocomplete="street_number"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="zip" value="{{ __('ZIP') }}"/>
                <x-jet-input id="zip" class="block mt-1 w-full" type="text" name="zip"
                             :value="old('zip')" required autocomplete="zip"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="place" value="{{ __('Place') }}"/>
                <x-jet-input id="place" class="block mt-1 w-full" type="text" name="place"
                             :value="old('place')" required autocomplete="place"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                             autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                             name="password_confirmation" required autocomplete="new-password"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
