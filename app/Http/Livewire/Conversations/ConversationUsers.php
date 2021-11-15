<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationUsers extends Component
{
    public Collection $users;

    public function mount($users)
    {
        $this->users = $users;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-users');
    }
}
