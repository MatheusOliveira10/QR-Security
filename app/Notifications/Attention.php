<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;
use App\Aluno;
use App\User;

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
        $aluno = Aluno::find($this->frequencia->aluno_id);
        $notifiable = User::find($aluno->user_id);
        return [
            'frequencia' => $this->frequencia,
            'aluno' => Aluno::find($this->frequencia->aluno_id),
            'user' => $notifiable
        ];

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
