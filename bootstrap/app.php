<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\Middleware\StartSession;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        //$middleware->append(\Illuminate\Session\Middleware\StartSession::class);
        $middleware->append(\App\Http\Middleware\SetLocale::class);
        $middleware->append(StartSession::class);

        $middleware->appendToGroup('web', StartSession::class);
        $middleware->appendToGroup('web', \Illuminate\View\Middleware\ShareErrorsFromSession::class);
        $middleware->appendToGroup('web', \App\Http\Middleware\SetLocale::class);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
