<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli articoli</h1>
            </div>
        </div>
        @if(session('DeleteMessage'))
        <div class="alert alert-danger">
            {{ session('DeleteMessage') }}
        </div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:search-article />
            </div>
        </div>
    </div>
</x-layout>