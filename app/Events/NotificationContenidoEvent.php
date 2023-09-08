<?php

namespace App\Events;

use App\Models\Hijo\Hijo;
use Illuminate\Support\Arr;
use FontLib\TrueType\Collection;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificationContenidoEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $contenido;
    public $user;
    public $hijo;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $contenido)
    {

        $this->contenido = $contenido;
        $this->user=$user;
        $this->hijo=Hijo::find($contenido->hijo_id);
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastAs()
    {
        return 'event-' . $this->user->id;
    }
    public function broadcastOn()
    {
        return ['channel' . $this->user->id, 'channel2'.$this->user->id];
    }
}
