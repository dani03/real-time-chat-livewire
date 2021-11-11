<div>
@empty($conversations)
    <p class="muted"> vous n'avez pas de conversations</p>
@else
    @foreach($conversations as $conversation)

       <a href="{{route('conversation.show', $conversation->uuid)}}" class=" block bg-white p-4 mb-2">
            <div class="font-bold text-muted hover:underline">
                @foreach($conversation->users as $user)
                
                    {{ $user->present()->name()}} @if(!$loop->last) , @endif
               
                @endforeach
            </div>

            <p class="text-muted mb-0 truncate flex align-center hover:underline">
                <span>this is the last message </span>
            </p>
        </a>   
    @endforeach
@endempty
</div>
