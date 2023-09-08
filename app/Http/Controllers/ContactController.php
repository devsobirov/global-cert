<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Notifications\NewFeedbackMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function form()
    {
        return view('contact');
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:100',
            'content' => 'required|string|max:1000'
        ]);

        $data['payload'] = json_encode($data);
        $message = Message::create($data);

        if (config('services.telegram-bot-api.token')) {
            foreach (User::whereNotNull('telegram_chat_id')->get() as $admin) {
                try {
                    $admin->notify(new NewFeedbackMessage($message));
                } catch (\Throwable $exception) {
                    Log::error($exception->getMessage(), $exception->getTrace());
                }
            }
        }
    }
}
