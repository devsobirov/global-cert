<?php

namespace App\Notifications;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class NewFeedbackMessage extends Notification
{
    use Queueable;

    public function __construct(public Message $message)
    {

    }

    public function via(object $notifiable): array
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($notifiable->telegram_chat_id)
            ->content("Получен новый обратный связь")
            ->line("Отправитель: *{$this->message->name}*")
            ->line("Контакты: *{$this->message->email}*")
            ->line("Компания: *{$this->message->subject}*")
            ->line("Сообщение: *{$this->message->content}*");
    }
}
