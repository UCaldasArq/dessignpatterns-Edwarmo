<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php', // Rutas web
        api: __DIR__.'/../routes/api.php', // Rutas de la API
        apiPrefix: 'api', // Prefijo para las rutas de la API (opcional)
        commands: __DIR__.'/../routes/console.php', // Rutas de consola
        health: '/up', // Ruta de salud (opcional)
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Configuración de middleware global
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Configuración de manejo de excepciones
    })->create();