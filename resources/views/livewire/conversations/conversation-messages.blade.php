<div>
    @foreach ($messages as $message)
        @if ($message->isOwn())
            <livewire:conversations.conversation-message-own :message='$message'>

            @else
                <livewire:conversations.conversation-one-message :message='$message'>
        @endif
    @endforeach
</div>
