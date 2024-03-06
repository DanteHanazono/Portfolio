<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
    }
    public function boot(): void
    {
        /** @var string $appUrl */
        $appUrl = config('app.url');

        if (Str::contains($appUrl, 'https')) {
            URL::forceScheme('https');
        }
    }
}
