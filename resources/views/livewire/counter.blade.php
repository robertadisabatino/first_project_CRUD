<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container-fluid my-5">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center">{{$value}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center gap-5">
                <button class="btn btn-danger" wire:click="decrement">-1</button>
                <button class="btn btn-success" wire:click="increment">+1</button>
                <button class="btn btn-primary" wire:click="incrementBy(5)">+5</button>

            </div>
        </div>
    </div>
</div>
