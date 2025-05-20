
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
        {{-- Success is as dangerous as failure. --}}
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <form wire:submit="update">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" wire:model.blur="title">
                
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo</label>
                <input type="text" class="form-control" id="subtitle" wire:model.blur="subtitle">
            
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Testo</label>
                <textarea class="form-control" id="body" wire:model.blur="body"></textarea>
                
            </div>
            <button type="submit" class="btn btn-dark">Modifica</button>
            <button wire:click="delete" class="btn btn-danger">Elimina</button>

        </form>
    </div>
    

