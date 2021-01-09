@section('title', __('Reset password'))

<div>
    <h2>{{ __('Reset password') }}</h2>

    <div>
        <form wire:submit.prevent="resetPassword">
            <input wire:model="token" type="hidden">
            <div>
                <label for="email">{{ __('Email address') }}</label>
                <input autocomplete="email"
                       autofocus
                       id="email"
                       required
                       type="email"
                       wire:model.lazy="email"/>
                @error('email')<p>{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="password">{{ __('Password') }}</label>

                <input autocomplete="new-password"
                       id="password"
                       required
                       type="password"
                       wire:model.lazy="password"/>
                @error('password')<p>{{ $message }}</p>@enderror
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
                <button type="submit">{{ __('Reset password') }}</button>
            </div>
        </form>
    </div>
</div>
