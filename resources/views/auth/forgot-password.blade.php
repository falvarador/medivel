<x-guest-layout>
    <x-slot:sidebar>
        <h1 class="title">
            {{ __('Recover your password') }}
        </h1>
        <p class="subtitle">
            {{ __('Enter your e-mail address to send you a password reset link.') }}
            <strong>{{__('Medivel!') }}</strong>
        </p>
    </x-slot:sidebar>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="box">
        @csrf

        <!-- Email Address -->
        <div class="field">
            <label for="email" class="label">{{ __('Email address') }}</label>
            <div class="control">
                <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div class="control">
            <button type="submit" class="button is-link">
                {{ __('Email password reset link') }}
            </button>
        </div>
    </form>
</x-guest-layout>