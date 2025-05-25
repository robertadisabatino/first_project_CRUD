<x-layout>

    @if(session('DeleteMessage'))
    <div class="alert alert-danger">
        {{ session('DeleteMessage') }}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:search-article />
            </div>
        </div>
    </div>
</x-layout>