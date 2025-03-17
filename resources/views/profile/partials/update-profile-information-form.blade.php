<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-1000">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="max-w-xl">
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" required>
            </div>

            <div class="mt-4">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required>
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif

            <div class="mt-4">
                <button type="submit">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</section>
