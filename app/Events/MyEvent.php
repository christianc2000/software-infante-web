<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $newnotification;
    public $time;

    public function __construct($contenido)
    {
        
       $this->newnotification=$contenido;
       $this->time=$contenido->created_at->diffForHumans();
        //   $this->read= auth()->user()->readNotifications->take(3);
    }

    public function broadcastOn()
    {
        return ['canal-vista-notification'];
    }

    public function broadcastAs()
    {
        return 'evento-vista-notification';
    }
}
