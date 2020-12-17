@section('title', __('Sign in to your account'))
<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            {{ __('Sign in to your account') }}
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 max-w">
            {{ __('Or') }}
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                {{ __('create a new account') }}
            </a>
        </p>
    </div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        {{ __('Email address') }}
                    </label>
                    <div class="mt-1">
                        <input autocomplete="email"
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                               id="email"
                               name="email"
                               required
                               type="email"
                               wire:model.lazy="email">
                        @error('email')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        {{ __('Password') }}
                    </label>
                    <div class="mt-1">
                        <input autocomplete="current-password"
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                               id="password"
                               name="password"
                               required
                               type="password"
                               wire:model.lazy="password">
                        @error('password')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember"
                               id="remember_me"
                               name="remember_me"
                               type="checkbox"
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            {{ __('Remember') }}
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Sign in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
