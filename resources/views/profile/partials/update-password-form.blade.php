<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-1000">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <div class="max-w-xl">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('put')
            <div>
                <label for="current_password">{{ __('Current Password') }}</label>
                <input id="current_password" name="current_password" type="password" required>
            </div>
            <div class="mt-4">
                <label for="password">{{ __('New Password') }}</label>
                <input id="password" name="password" type="password" required>
            </div>
            <div class="mt-4">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required>
            </div>
            <div class="mt-4">
                <button type="submit">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</section>
