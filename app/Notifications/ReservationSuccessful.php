<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;


class ReservationSuccessful extends Notification
{
    use Queueable;

    public $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($code)
    {
        $this->order = $code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $date = Carbon::now();
        $date->addDays(7);
        $expiration =$date->toDateString();


        return (new MailMessage)
                    ->line('Your order no. '.$this->order.' was successful. Please pick up until '.$expiration)
                    // ->line(new HtmlString(`<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=expiration=".$expiration/>`));
                    ->action('QR Code', url('https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=expiration='.$expiration));
                    // ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        //get the info about the order and user
        $user = Auth::user();

        return [
            'reservation_successful' => 'Your order no. xxxx was successful. Please pick up until xx.xx.xxxx'
        ];
    }
}
