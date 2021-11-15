<div class="mb-2 flex justify-end">
    <div class="mr-2">
        <div class="bg-blue-400 text-white p-2 rounded">
            {{ $message->body }}
        </div>
        <span class="muted"> {{ $message->user->present()->name() }}</span>
    </div>
    <div>
        <img class="rounded-full w-10 mr-2" src="{{ $message->user->present()->avatar() }}"
            alt="{{ $message->user->name }}">
    </div>
</div>
