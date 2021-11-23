<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conversations') }}
        </h2>
    </x-slot>
    @include('conversations.partials._header')
    <div class=" inline-flex w-full justify-around">

        <div class="py-8 w-80">
            <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-white border-b border-gray-200">
                        listes de conversations
                        @livewire('conversations.conversation-list', ['conversations' => $conversations])
                    </div>

                </div>
            </div>
        </div>

        <div class="w-1/3">
            <livewire:conversations.conversation-create />
        </div>

    </div>
</x-app-layout>
