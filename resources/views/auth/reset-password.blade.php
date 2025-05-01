<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="field">
            <label for="email" class="label">{{ __('Email address') }}</label>
            <div class="control">
                <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email"
                    :value="old('email', $request->email)" required autocomplete="email" autofocus
                    placeholder="Enter your email">

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Password -->
        <div class="field">
            <label for="password" class="label">{{ __('Password') }}</label>
            <div class="control">
                <input id="password" type="password" class="input @error('password') is-danger @enderror"
                    name="password" required autocomplete="new-password" placeholder="Enter your password">

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="field">
            <label for="password_confirmation" class="label">{{ __('Confirm Password') }}</label>
            <div class="control">
                <input id="password_confirmation" type="password" class="input" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm your password">

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <!-- Submit -->
        <div class="control">
            <button type="submit" class="button is-link">
                {{ __('Reset password') }}
            </button>
        </div>
    </form>
</x-guest-layout>