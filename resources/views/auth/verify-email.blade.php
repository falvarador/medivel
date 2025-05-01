<x-guest-layout>
    <x-slot:sidebar>
        <h1 class="title">
            {{ __('Welcome again') }}
        </h1>
        <p class="subtitle">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            <strong>{{__('Medivel!') }}</strong>
        </p>
    </x-slot:sidebar>

    @if (session('status') == 'verification-link-sent')
        <p class="is-size-6">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}" class="box">
        @csrf

        <!-- Submit -->
        <div class="control">
            <button type="submit" class="button is-link">
                {{ __('Resend verification email') }}
            </button>
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="box">
        @csrf

        <button type="submit" class="button is-link is-light">
            {{ __('Sing out') }}
        </button>
    </form>
</x-guest-layout>