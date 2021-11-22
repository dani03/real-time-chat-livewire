<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Livewire\Component;

class ConversationReply extends Component
{
    public $body;
    public $conversation;
    public function mount(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }
    public function reply()
    {
        // dd($this->body);
        $this->validate([
            'body' => 'required',
        ]);

        $message = $this->conversation->messages()->create([
            'user_id' => auth()->id(),
            'body' => $this->body
        ]);
        $this->conversation->update([
            'last_message_at' => now()
        ]);
        $this->emit('message-created', $message->id);

        $this->body = "";
    }

    public function render()
    {
        return view('livewire.conversations.conversation-reply');
    }
}
