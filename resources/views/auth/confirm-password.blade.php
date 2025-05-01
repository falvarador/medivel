<x-guest-layout>
    <x-slot:sidebar>
        <h1 class="title">
            {{ __('Confirm your password') }}
        </h1>
        <p class="subtitle">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            <strong>{{__('Medivel!') }}</strong>
        </p>
    </x-slot:sidebar>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="field">
            <div class="control">
                <label for="password" class="label">{{ __('Password') }}</label>

                <input id="password" type="password" class="input @error('password') is-danger @enderror"
                    name="password" required autocomplete="current-password" placeholder="Confirm your password">

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Submit -->
        <div class="control">
            <button type="submit" class="button is-link">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</x-guest-layout>