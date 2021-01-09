@section('title', __('Confirm your password'))

<div>
    <div>
        <h2>{{ __('Confirm your password') }}</h2>
        <p>{{ __('Please confirm your password before continuing') }}</p>
    </div>

    <div>
        <form wire:submit.prevent="confirm">
            <div>
                <label for="password">{{ __('Password') }}</label>
                <input autocomplete="current-password"
                       autofocus
                       id="password"
                       name="password"
                       required
                       type="password"
                       wire:model.lazy="password"/>
                @error('password')<p>{{ $message }}</p>@enderror
            </div>

            <div>
                <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
            </div>

            <div>
                <button type="submit">{{ __('Confirm password') }}</button>
            </div>
        </form>
    </div>
</div>
