<form x-data="conversationReplyState()" action="#" wire:submit.prevent='reply'>
    <div class="grid mb-0">
        <textarea name="" placeholder="entrer votre message et valider avec entrer" wire:model='body'
            x-on:keydown.enter="submit" class="rounded" id="" rows="3"></textarea>
    </div>
    <button type="submit" x-ref="submit">envoyer</button>
</form>
<script>
    function conversationReplyState() {
        return {
            submit() {
                this.$refs.submit.click()
            }
        }
    }
</script>
