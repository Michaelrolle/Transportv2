<?php

namespace App\Listeners;

use App\Client;
use App\Events\OrderCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications;
use App\User;

class OrderCreatedNotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderCreatedEvent $event)
    {
        // dump($event);
        $client = Client::find($event->order["delivery_client_id"]);
        $client->notify(new \App\Notifications\OrderCreatedNotification());
    }
}
