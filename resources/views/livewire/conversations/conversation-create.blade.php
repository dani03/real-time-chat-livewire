<form action="" class="bg-white w-full" wire:submit.prevent='create'>
    <div class="p-4 border-bottom">
        <div class="text-muted">
            envoyer à
            @foreach ($users as $index => $user)
                <a href="" class="font-weight-bold">{{$user['name']}}</a>@if ($index + 1 !== count($users)),  @endif

            @endforeach
        </div>
    </div>

    <div x-data="conversationCreateState">
        <div class="form-group">
            <label for="user" class="sr-only">user</label>
            <input x-on:input.debounce.500="search" x-ref="search" type="text" placeholder="recherche un utilisateur"
                class="form-control p-2 rounded" autocomplete="off" id="user">
        </div>
        <template x-for="user in suggestions" :key="user.id">
            <a href="#" x-on:click="addUser(user)" class="block" x-text="user.name"></a>
        </template>
    </div>
    <div class="p-4 border-top">
        <div class="form-group">
            <label for="">message</label>
            <textarea rows="3" class="form-control" wire:model="body"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary">
            lancer la conversation
        </button>
    </div>


</form>

<script>
    function conversationCreateState() {
        return {
            suggestions: [],

            search(e) {
                fetch(`/api/search/users?q=${e.target.value}`)
                    .then(response => response.json())
                    .then((suggestions) => {
                        this.suggestions = suggestions;
                    })
            },

            addUser(user) {
                @this.call('addUser', user)
                this.$refs.search.value = "";
                this.suggestions = [];
            }

        }
    }
</script>
