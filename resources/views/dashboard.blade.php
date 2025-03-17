<!DOCTYPE html>
<html class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">
    @include('partials.navbar')
    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        <h1 class="text-3xl font-bold mb-8">{{ __("You're logged in!") }}</h1>
        <div class="grid grid-cols-3 gap-6">
            <!-- Box 1: Laravel -->
            <div class="flex flex-col items-center justify-center bg-gray-800 rounded-lg shadow p-4">
                <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" class="h-12 mb-2">
                <span>Laravel</span>
            </div>
            <!-- Box 2: Postgres -->
            <div class="flex flex-col items-center justify-center bg-gray-800 rounded-lg shadow p-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" alt="Postgres Logo" class="h-12 mb-2">
                <span>Postgres</span>
            </div>
            <!-- Box 3: Docker -->
            <div class="flex flex-col items-center justify-center bg-gray-800 rounded-lg shadow p-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Docker_%28container_engine%29_logo.svg" alt="Docker Logo" class="h-12 mb-2">
                <span>Docker</span>
            </div>
            <!-- Box 4: Postman -->
            <div class="flex flex-col items-center justify-center bg-gray-800 rounded-lg shadow p-4">
                <img src="https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg" alt="Postman Logo" class="h-12 mb-2">
                <span>Postman</span>
            </div>
            <!-- Box 5: Tailwind CSS -->
            <div class="flex flex-col items-center justify-center bg-gray-800 rounded-lg shadow p-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" alt="Tailwind CSS Logo" class="h-12 mb-2">
                <span>Tailwind CSS</span>
            </div>
            <!-- Box 6: Copilot -->
            <div class="flex flex-col items-center justify-center bg-gray-800 rounded-lg shadow p-4">
                <!-- Using an alternative Copilot logo -->
                <img src="https://visualstudioexptteam.gallerycdn.vsassets.io/extensions/visualstudioexptteam/vsgithubcopilot/0.2.765.20217/1732647638444/Microsoft.VisualStudio.Services.Icons.Default" alt="Copilot Logo" class="h-12 mb-2">
                <span>Copilot</span>
            </div>
        </div>
    </div>
</body>
</html>