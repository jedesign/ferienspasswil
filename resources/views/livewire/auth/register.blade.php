@section('title', __('Create a new account'))

<div>
    <h2>
        {{ __('Create a new account') }}
    </h2>
    <p>
        {{ __('Or') }}
        <a href="{{ route('login') }}">
            {{ __('sign in to your account') }}
        </a>
    </p>

    <form wire:submit.prevent="register">
        <x-form.input
            :autofocus="true"
            :required="true"
            autocomplete="given-name"
            label="{{ __('Firstname') }}"
            type="text"
            wire:model.lazy="firstname"
        />
        <x-form.input
            :required="true"
            autocomplete="family-name"
            label="{{ __('Lastname') }}"
            type="text"
            wire:model.lazy="lastname"
        />
        <x-form.input
            :required="true"
            label="{{ __('Street') }}"
            type="text"
            wire:model.lazy="street"
        />
        <x-form.input
            label="{{ __('Street Number') }}"
            type="text"
            wire:model.lazy="street_number"
        />
        <x-form.input
            :required="true"
            label="{{ __('Postcode') }}"
            type="text"
            wire:model.lazy="postcode"
        />
        <x-form.input
            :required="true"
            label="{{ __('City') }}"
            type="text"
            wire:model.lazy="city"
        />
        <x-form.input
            :required="true"
            autocomplete="email"
            label="{{ __('Email address') }}"
            type="email"
            wire:model.lazy="email"
        />
        <x-form.input
            :required="true"
            label="{{ __('Phone') }}"
            type="text"
            wire:model.lazy="phone"
        />
        <x-form.input
            :required="true"
            autocomplete="new-password"
            label="{{ __('Password') }}"
            type="password"
            wire:model.lazy="password"
        />
        <x-form.input
            :required="true"
            autocomplete="new-password"
            label="{{ __('Confirm Password') }}"
            type="password"
            wire:model.lazy="password_confirmation"
        />

        <div>
            <button type="submit">{{ __('Register') }}</button>
        </div>
    </form>
</div>
