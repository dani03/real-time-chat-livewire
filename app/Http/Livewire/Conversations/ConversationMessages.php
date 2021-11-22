<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessages extends Component
{
    public $messages;
    public $conversationId;
    public function getListeners()
    {
        return  [
            'message-created' => 'prependMessage',
            "echo-private:conversations.{$this->conversationId},conversations\\MessageAddEvent" => "prependMessageFromBroadcast",
        ];
    }

    public function prependMessage($id)
    {
        $this->messages->prepend(Message::find($id));
    }

    public function prependMessageFromBroadcast($payload)
    {
        $this->prependMessage($payload['message']['id']);
    }

    public function mount(Conversation $conversation, Collection $messages)
    {
        $this->conversationId = $conversation->id;
        $this->messages = $messages;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
