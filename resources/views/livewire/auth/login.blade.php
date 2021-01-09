@section('title', __('Sign in to your account'))
<div>
    <h2>{{ __('Sign in to your account') }}</h2>
    <p>
        {{ __('Or') }}
        <a href="{{ route('register') }}">
            {{ __('create a new account') }}
        </a>
    </p>
    <form wire:submit.prevent="authenticate">
        <div>
            <label for="email">{{ __('Email address') }}</label>
            <input autocomplete="email"
                   autofocus
                   id="email"
                   name="email"
                   required
                   type="email"
                   wire:model.lazy="email">
            @error('email')<p>{{$message}}</p>@enderror
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>
            <input autocomplete="current-password"
                   id="password"
                   name="password"
                   required
                   type="password"
                   wire:model.lazy="password">
            @error('password')<p>{{$message}}</p>@enderror
        </div>

        <div>
            <input wire:model.lazy="remember"
                   id="remember_me"
                   name="remember_me"
                   type="checkbox">
            <label for="remember_me">{{ __('Remember') }}</label>
        </div>

        <div>
            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
        </div>
        <div>
            <button type="submit">{{ __('Sign in') }}</button>
        </div>
    </form>
</div>
