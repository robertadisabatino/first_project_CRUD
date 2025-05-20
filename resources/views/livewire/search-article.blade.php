<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <input type="text" class="form-control" placeholder="Cerca un articolo..." wire:model.live="search" />
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row my-2">
                    @foreach ($articles as $article)
                    <div class="col-md-3">
                        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text">{{$article->body}}</p>
                                <a href="{{route('article.edit', $article)}}" class="btn btn-primary btn-outline-light">Modifica</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
