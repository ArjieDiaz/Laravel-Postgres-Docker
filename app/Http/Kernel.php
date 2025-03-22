<?php
class Kernel extends HttpKernel
{
    // ...existing code...

    protected $middlewareGroups = [
        'web' => [
            // ...existing code...
        ],

        // ...existing code...
    ];

    protected $routeMiddleware = [
        // ... existing middleware
        'role' => \App\Http\Middleware\CheckRole::class,
    ];

    // ...existing code...
}
