<div class="flex space-2 justify-around">
    <div>

        @foreach ($users as $user)
            <i> <b>{{ $user->present()->name() }}</b> </i> @if (!$loop->last) , @endif
        @endforeach
    </div>
    <div>
        <a href="" class="hover:text-blue-500 text-blue-300">ajouter une personne</a>
    </div>
</div>
