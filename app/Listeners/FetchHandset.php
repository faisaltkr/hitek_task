<?php

namespace App\Listeners;

use App\Events\CreateLog;
use App\Events\HandsetViewedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class FetchHandset
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(HandsetViewedEvent $event): void
    {
        Log::info('Handset Data Fetched Successfully');
    }
}
