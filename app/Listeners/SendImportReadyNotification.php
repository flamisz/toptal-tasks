<?php

namespace App\Listeners;

use App\Events\ImportReady;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendImportReadyNotification
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
     * @param  ImportReady  $event
     * @return void
     */
    public function handle(ImportReady $event)
    {
        //
    }
}
