<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// use App\Exceptions\Handler;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // $middleware->add(\App\Http\Middleware\TrustProxies::class);
        // $middleware->add(\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class);
        // $middleware->add(ExampleMiddleware::class);

        $middleware->alias([
            'role.check' => \App\Http\Middleware\CheckRole::class,
            'subscribed' => \App\Http\Middleware\EnsureUserIsSubscribed::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // カスタム例外ハンドラを登録
        // $exceptions->handler(Handler::class);

        // 特定の例外をログに出力したい場合
        // $exceptions->report(\App\Exceptions\CustomException::class, function ($e) {
        //     \Log::warning('CustomException: ' . $e->getMessage());
        // });
    })
    ->create();
