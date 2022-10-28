<?php

namespace App\Listeners;

use App\Events\ApiEvents;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MobileApiCalled
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
     * @param  \App\Events\ApiEvents  $event
     * @return void
     */
    public function handle(ApiEvents $event)
    {
        // $message = $event->request['name'] . ' just logged in to the application.';
        $message = ' just logged in to the application.';
        \Storage::put('loginactivity.txt', json_encode($event->request['name']));
    }
}
