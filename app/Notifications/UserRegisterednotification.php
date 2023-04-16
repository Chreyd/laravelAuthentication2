<?php

namespace App\Notifications;

use App\Mail\TestNotificationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegisterednotification extends Notification
{
    use Queueable;
    public  $user;
    public $post;

    /**
     * Create a new notification instance.
     */
    public function __construct($user, $post)
    {
        $this->user=$user;
        $this->post=$post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable)
    {

        return(new TestNotificationMail($this->user, $this->post))
                ->to($this->user->email);
       /*  return (new MailMessage)
                    ->line('Notification pour l\'utilisateur '.$notifiable->name.' pour le poste '.$this->post['title'])
                    ->action('Notification Action our application!'); */
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title'=>'Mon titre est '.$this->post['title'],
            'mon_email'=>$notifiable->email
        ];
    }
}
