<x-guest-layout>
    <x-slot:sidebar>
        <h1 class="title">
            {{ __('Welcome aboard') }}
        </h1>
        <p class="subtitle">
            {{ __('Enter your username and password to create your login credentials to access the platform.') }}
            <strong>{{__('Medivel!') }}</strong>
        </p>
    </x-slot:sidebar>

    <form method="POST" action="{{ route('register') }}" class="box">
        @csrf

        <div class="field mb-5">
            <h2 class="title is-size-4">{{ __('Sing up') }}</h2>
        </div>

        <!-- Name -->
        <div class="field">
            <label for="name" class="label">{{ __('Name') }}</label>

            <div class="control">
                <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="field">
            <label class="label">{{ __('Email address') }}</label>
            <div class="control">
                <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Password -->
        <div class="field">
            <label class="label">{{ __('Password') }}</label>
            <div class="control">
                <input id="password" type="password" class="input @error('password') is-danger @enderror"
                    name="password" required autocomplete="new-password" placeholder="Enter your password">

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="field">
            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
            <div class="control">
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm your password">
            </div>
        </div>

        <!-- I have an account & Submit -->
        <div class="field is-grouped is-grouped-right mt-5">
            <a class="control" href="{{ route('login') }}">
                <p class="button is-link is-light">
                    {{ __('I have an account') }}
                </p>
            </a>
            <div class="control">
                <button type="submit" class="button is-link">{{ __('Sing up') }}</button>
            </div>
        </div>
    </form>
</x-guest-layout>