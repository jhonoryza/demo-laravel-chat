<x-app-layout>
    <div class="container">
        <div class="row">
            @livewire('chat', ['userId' => request('user_id', 1)])
        </div>
    </div>
</x-app-layout>
