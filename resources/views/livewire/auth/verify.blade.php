@section('title', __('Verify your email address'))

<div>
    <div>
        <h2>{{ __('Verify your email address') }}</h2>

        <p>{{ __('Or') }}
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('sign out') }}</a>
        </p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
    </div>

    <div>
        @if (session('resent'))
            <div role="alert">
                <p>{{ __('A fresh verification link has been sent to your email address.') }}</p>
            </div>
        @endif

        <div>
            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>

            <p>
                {{ __('If you did not receive the email,') }} <a
                    wire:click="resend">{{ __('click here to request another') }}</a>.
            </p>
        </div>
    </div>
</div>
