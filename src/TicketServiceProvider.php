<?php

namespace Bunker\SiteContact;

use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views/support-ticket', 'support-ticket');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'support-ticket');
        $this->mergeConfigFrom(__DIR__ . '/config/support_ticket.php', 'support-ticket');
        $this->publishes([
            __DIR__ . '/config/support_ticket.php' => config_path('support_ticket.php'),
            __DIR__.'/resources/lang' => resource_path('lang'),
            __DIR__ . '/resources/views/support-ticket' => resource_path('views/vendor/support-ticket')
        ], 'support-ticket');
    }



    public function register()
    {

    }


}
