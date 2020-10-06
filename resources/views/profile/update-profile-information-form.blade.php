<form method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    <div>
        <label>{{ __('Firstname') }}</label>
        <input type="text" name="firstname" value="{{ old('firstname') ?? auth()->user()->firstname }}" required autofocus autocomplete="firstname" />
    </div>

    <div>
        <label>{{ __('Lastname') }}</label>
        <input type="text" name="lastname" value="{{ old('lastname') ?? auth()->user()->lastname }}" required autocomplete="lastname" />
    </div>

    <div>
        <label>{{ __('Email') }}</label>
        <input type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>

    <div>
        <button type="submit">
            {{ __('Update Profile') }}
        </button>
    </div>
</form>

<hr>
