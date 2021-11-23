<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Livewire\Component;
use Illuminate\Support\Str;

class ConversationCreate extends Component
{
    public $users = [];
    public $body = "";
    public function addUser($user)
    {
        $this->users[] = $user;
    }

    public function create()
    {
        $this->validate([
            'body' => 'required',
            'users' => 'required',
        ]);
        $conversation = Conversation::create([
            'uuid' => Str::uuid(),

        ]);

        $conversation->messages()->create([

            'user_id' => auth()->id(),
            'body' => $this->body,
        ]);

        $conversation->users()->sync($this->collectUsersIds());

        return redirect()->route('conversation.show', $conversation);
    }

    public function collectUsersIds()
    {
        return collect($this->users)->merge([auth()->user()])->pluck('id')->unique();
    }
    public function render()
    {
        return view('livewire.conversations.conversation-create');
    }
}
