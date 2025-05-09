<div>
    {{-- Success is as dangerous as failure. --}}


    <div class="">
        <h1>Counter</h1>
        <button wire:click="increment">+</button>
        <h2>{{ $count }}</h2>
        <button wire:click="decrement">-</button>
        <button wire:click="resetCount">Reset</button>
    </div>
</div>
