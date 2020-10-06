@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>{{ __('Firstname') }}</label>
            <input type="text" name="firstname" value="{{ old('firstname') }}" required autofocus autocomplete="firstname" />
        </div>

        <div>
            <label>{{ __('Lastname') }}</label>
            <input type="text" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" />
        </div>

        <div>
            <label>{{ __('Phone') }}</label>
            <input type="text" name="phone" value="{{ old('phone') }}" required autocomplete="phone" />
        </div>

        <div>
            <label>{{ __('Email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required />
        </div>

        <div>
            <label>{{ __('Password') }}</label>
            <input type="password" name="password" required autocomplete="new-password" />
        </div>

        <div>
            <label>{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <a href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <div>
            <button type="submit">
                {{ __('Register') }}
            </button>
        </div>
    </form>
@endsection
