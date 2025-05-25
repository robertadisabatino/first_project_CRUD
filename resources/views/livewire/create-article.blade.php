<div class="container py-5 ">
    <div class="row justify-content-center">

        <div class="col-12  ">
            {{-- Messaggio di successo --}}
            @if(session('message'))
                <div class="alert alert-success rounded-pill text-center">
                    {{ session('message') }}
                </div>
            @endif
    
            <div class="card border-0 shadow rounded-4 px-4 py-5 bg-white">
                <h2 class="text-center mb-4 fw-semibold">Crea un nuovo articolo</h2>
    
                <form wire:submit="store">
                    <!-- Titolo -->
                    <div class="mb-4">
                        <label for="title" class="form-label fw-medium">Titolo</label>
                        <input type="text" class="form-control rounded-pill shadow-sm px-4 py-2" id="title" wire:model.blur="title">
                        @error('title')
                            <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror
                    </div>
    
                    <!-- Sottotitolo -->
                    <div class="mb-4">
                        <label for="subtitle" class="form-label fw-medium">Sottotitolo</label>
                        <input type="text" class="form-control rounded-pill shadow-sm px-4 py-2" id="subtitle" wire:model.blur="subtitle">
                        @error('subtitle')
                            <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror
                    </div>
    
                    <!-- Corpo -->
                    <div class="mb-4">
                        <label for="body" class="form-label fw-medium">Testo</label>
                        <textarea class="form-control rounded-4 shadow-sm px-4 py-3" id="body" rows="6" wire:model.blur="body"></textarea>
                        @error('body')
                            <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror
                    </div>
    
                    <!-- Pulsante -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark rounded-pill px-5 py-2">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
