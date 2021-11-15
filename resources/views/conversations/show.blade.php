<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conversations') }}
        </h2>
    </x-slot>

    <div class=" inline-flex w-screen justify-around">

        <div class="py-8 w-80">
            <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        listes de conversations
                        @livewire('conversations.conversation-list', ['conversations' => $conversations])

                    </div>
                </div>
            </div>
        </div>
        <div class="py-12 w-2/4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white  border-b border-gray-200">

                        <div class="p-4 border-b-2">
                            @livewire('conversations.conversation-users', ['users' => $conversation->users])
                        </div>
                        <div class="p-4 border-b-2 h-60 max-h-60 overflow-y-scroll">
                            @livewire('conversations.conversation-messages', ['messages' => $conversation->messages])
                        </div>
                        <div class="p-4 border-t-0">
                            @livewire('conversations.conversation-reply')

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
