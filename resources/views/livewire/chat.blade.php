{{--polling for every 2 seconds--}}
<div wire:poll class="mb-4">
    @forelse($messages as $message)
        [{{ $message->created_at->format('H:i') }}] {{ $message->user->name }} : {{ $message->text }}
        <br>
    @empty
        no message yet, type one below
    @endforelse

        <form wire:submit.prevent="sendMessage" class="row g-3">
            <div class="col-auto">
                <input type="text" class="form-control" id="message" placeholder="type here"
                    wire:model.defer="messageText">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary mb-3" type="submit">send</button>
            </div>

        </form>

</div>
