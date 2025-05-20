<div>
    {{-- Success is as dangerous as failure. --}}
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.blur="title">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" wire:model.blur="subtitle">
            @error('subtitle')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Testo</label>
            <textarea class="form-control" id="body" wire:model.blur="body"></textarea>
            @error('body')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark">Inserisci</button>
    </form>
</div>
