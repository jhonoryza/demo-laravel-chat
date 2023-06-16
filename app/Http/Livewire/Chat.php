<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Chat extends Component
{
    public $userId;
    public $messageText;
    public function render()
    {
        $messages = Message::query()
            ->latest()
            ->take(10)
            ->get()
            ->sortBy('id');

        view()->share(compact('messages'));
        return view('livewire.chat');
    }

    protected $rules = [
        'userId' => 'required|exists:users,id',
        'messageText' => 'required|string|min:1|max:65535',
    ];

    public function sendMessage()
    {
        $this->validate();

        Message::query()->create([
            'user_id' => $this->userId,
            'text' => $this->messageText
        ]);

        $this->reset('messageText');
    }
}
