<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class ConversationMessageOwn extends Component
{
    public $message;
    public function mount($message)
    {
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-message-own');
    }
}
