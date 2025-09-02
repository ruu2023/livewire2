<div>
    <div style="text-align: center">
        <button type="button" class="btn btn-primary"
            style="--bs-btn-padding-y: .80rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
            wire:click="increment">
            Count Up
        </button>
        <button wire:click="decrement">Count Down</button>
        <button wire:click="decade">x10</button>
        <button wire:click="zero">zero</button>
        <button wire:click="saveNum">save</button>
        <h1>{{ $count }}</h1>
        <h1>{{ $data }}</h1>
        <h2>{{ $latestId }}</h2>
    </div>
</div>
