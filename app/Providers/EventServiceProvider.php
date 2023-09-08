<?php

namespace App\Providers;

use App\Events\MyEvent;
use App\Events\NotificationContenidoEvent;
use App\Events\PushNotificationEvent;
use App\Listeners\NotificationContenidoListener;
use App\Listeners\PushNotificationListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PushNotificationEvent::class=>[
            PushNotificationListener::class,
        ],
        NotificationContenidoEvent::class=>[
            NotificationContenidoListener::class,
        ]
    ];
  
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
