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
        <div>
            <label for="firstname">{{ __('Firstname') }}</label>
            <input autocomplete="given-name"
                   autofocus
                   id="firstname"
                   required
                   type="text"
                   wire:model.lazy="firstname"/>
            @error('firstname')<p>{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="lastname">{{ __('Lastname') }}</label>
            <input autocomplete="family-name"
                   id="lastname"
                   required
                   type="text"
                   wire:model.lazy="lastname"/>
            @error('lastname')<p>{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="street">{{ __('Street') }}</label>
            <input id="street"
                   required
                   type="text"
                   wire:model.lazy="street"/>
            @error('street')<p>{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="street_number">{{ __('Street Number') }}</label>
            <input id="street_number"
                   type="text"
                   wire:model.lazy="street_number"/>
            @error('street_number')<p>{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="postcode">{{ __('Postcode') }}</label>
            <input id="postcode"
                   required
                   type="text"
                   wire:model.lazy="postcode"/>
            @error('postcode') <p>{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="city">{{ __('City') }}</label>
            <input id="city"
                   required
                   type="text"
                   wire:model.lazy="city"/>
            @error('city')<p>{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="email">{{ __('Email address') }}</label>
            <input autocomplete="email"
                   id="email"
                   required
                   type="email"
                   wire:model.lazy="email"/>
            @error('email') <p>{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="phone">{{ __('Phone') }}</label>
            <input id="phone"
                   required
                   type="text"
                   wire:model.lazy="phone"/>
            @error('phone') <p>{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>

            <input autocomplete="new-password"
                   id="password"
                   required
                   type="password"
                   wire:model.lazy="password"/>
            @error('password') <p>{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input autocomplete="new-password"
                   id="password_confirmation"
                   required
                   type="password"
                   wire:model.lazy="password_confirmation"/>
        </div>

        <div>
            <button type="submit">{{ __('Register') }}</button>
        </div>
    </form>
</div>
