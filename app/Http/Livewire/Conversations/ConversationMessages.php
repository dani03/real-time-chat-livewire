<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessages extends Component
{
    public $messages;
    public function mount(Collection $messages)
    {
        $this->messages = $messages;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
