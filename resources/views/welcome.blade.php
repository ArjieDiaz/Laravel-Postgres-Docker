<!DOCTYPE html>
<html class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 rounded-lg shadow-lg max-w-md w-full p-6">
            <h1 class="text-2xl font-bold text-center mb-4">{{ __('Welcome') }}</h1>
            <p class="mb-6 text-center">
                Welcome to our application. Please 
                <a href="{{ route('login') }}" class="text-blue-400 hover:underline">login</a> to continue.
            </p>
        </div>
    </div>
</body>
</html>
