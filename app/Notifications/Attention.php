<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;
use App\Aluno;

class Attention extends Notification
{
    use Queueable;

    protected $frequencia;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($frequencia)
    {
        $this->frequencia=$frequencia;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'frequencia' => $this->frequencia,
            'user' => $notifiable,
            'aluno' => Aluno::find($this->frequencia->aluno_id)
        ];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
