<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        <div class="row my-4">
            <div class="col-12 d-flex justify-content-center">
                <input type="text" class="form-control rounded-pill shadow-sm px-4 py-2 w-100 w-md-50" placeholder="Cerca un articolo..." wire:model.live="search"/>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="row my-2">
                    @foreach ($articles as $article)
                    <div class="col-12 col-md-3 my-3 justify-content-center d-flex ">
                        
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text text-muted">{{$article->body}}</p>
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
