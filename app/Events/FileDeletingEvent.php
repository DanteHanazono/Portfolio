<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Projects;

class FileDeletingEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public $project)
    {
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('deleting'),
        ];
    }
}
