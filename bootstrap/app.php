<?php
use App\Http\Middleware\AuthMiddleWare;
use App\Http\Middleware\RedirectIfNotAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {

        // Define alias for the 'roles' middleware
        $middleware->alias([
            'roles' => AuthMiddleWare::class,  // Correct alias definition
            'auth.redirect' => RedirectIfNotAuthenticated::class,
        ]);

        return $middleware;
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Customize exception handling here
    })
    ->create();
