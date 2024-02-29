<?php

namespace App\Listeners;

use App\Events\FileDeletingEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class RemoveFileFromStorageListener
{
    public function __construct()
    {
        //
    }

    public function handle(FileDeletingEvent $event)
    {
        $imgPath = $event->project->image;
        Storage::delete('public/images/img/portfolio/' . $imgPath);
    }
}
