<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use App\Mail\LoginCredentials;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendLoginCredentials
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        // Enviar el email con las credenciales del login
        Mail::to($event->user)->queue(
            new LoginCredentials($event->user, $event->password)
        );
    }
}
