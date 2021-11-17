<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessages extends Component
{
    public $messages;
    public function getListeners()
    {
        return  [
            'message-created' => 'prependMessage',
        ];
    }

    public function prependMessage($id)
    {
        $this->messages->prepend(Message::find($id));
    }

    public function mount(Collection $messages)
    {
        $this->messages = $messages;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
