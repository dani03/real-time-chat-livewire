 <div class="mb-2 flex ">
     <div>
         <img class="rounded-full w-10 mr-2" src="{{ $message->user->present()->avatar() }}"
             alt="{{ $message->user->name }}">
     </div>
     <div>
         <div class="bg-gray-200 p-2 rounded">
             {{ $message->body }}
         </div>
         <span class="muted"> {{ $message->user->present()->name() }}</span>
     </div>
 </div>
