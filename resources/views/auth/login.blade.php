<!DOCTYPE html>
<html class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 rounded-lg shadow-lg max-w-md w-full p-6">
            <h1 class="text-2xl font-bold text-center mb-4">{{ __('Login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm mb-2">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-3 py-2 rounded bg-gray-700 text-gray-200 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-300 text-sm mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required class="w-full px-3 py-2 rounded bg-gray-700 text-gray-200 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @error('password')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 flex items-center">
                    <input id="remember" type="checkbox" name="remember" class="mr-2" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-gray-300 text-sm">{{ __('Remember Me') }}</label>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full py-2 bg-blue-600 hover:bg-blue-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="text-blue-400 hover:underline text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
</html>
