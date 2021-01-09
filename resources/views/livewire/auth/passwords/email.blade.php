@section('title', __('Reset password'))

<div>
    <h2>{{ __('Reset password') }}</h2>
    <div>
        @if ($emailSentMessage)
            <div>
                <p>
                    {{ $emailSentMessage }}
                </p>
            </div>
        @else
            <form wire:submit.prevent="sendResetPasswordLink">
                <div>
                    <label for="email">{{ __('Email address') }}</label>
                    <input autocomplete="email"
                           autofocus
                           id="email"
                           name="email"
                           required
                           type="email"
                           wire:model.lazy="email"/>
                    @error('email')<p>{{ $message }}</p>@enderror
                </div>

                <div>
                    <button type="submit">{{ __('Send password reset link') }}</button>
                </div>
            </form>
        @endif
    </div>
</div>
