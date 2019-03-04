<?php

namespace App\Listeners;

use App\Events\ImportChunkReady;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendImportChunkReadyNotification
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
     * @param  ImportChunkReady  $event
     * @return void
     */
    public function handle(ImportChunkReady $event)
    {
        //
    }
}
