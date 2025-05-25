<x-layout>
    
    <!-- Header -->
    <header class="text-center">
        <div class="container">
            <h1 class="display-1">Benvenuto su Il Giornale</h1>
            <p class="lead text-muted">Condividi notizie e leggi gli ultimi articoli.</p>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="container my-5">
        <!-- Intro -->
        <section class="mb-5 text-center">
            <p class="fs-5">La piattaforma ideale per giornalisti e appassionati di scrittura. Scopri cosa sta succedendo nel mondo e contribuisci con le tue storie.</p>
        </section>
        
        <!-- Articoli Recenti -->
        <section >
            <h2 class="section-title">Articoli Recenti</h2>
            <div class="row g-4 my-3">
                @forelse ($articles as $article)
                
                <div class="col-12 col-md-3 my-3 justify-content-center d-flex ">
                    
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text text-muted">{{$article->body}}</p>
                        </div>
                    </div>
                    
                </div>
                
                @empty
                
                <h3>Non ci sono ancora annunci, aggiungine uno!</h3>
                
                <a class="btn btn-dark" href="{{route('article.create')}}">Aggiungi</a>
                
                @endforelse
                
                <div class="container d-flex justify-content-center my-5">
                    
                    {{$articles->links()}}
                    
                </div>
                
            </div>
        </section>
        
        <!-- Categorie fittizie-->
        <section class="mb-5">
            <h2 class="section-title">Categorie Popolari</h2>
            <div class="d-flex flex-wrap gap-3">
                <span class="badge bg-secondary px-3 py-2">Politica</span>
                <span class="badge bg-secondary px-3 py-2">Economia</span>
                <span class="badge bg-secondary px-3 py-2">Cultura</span>
                <span class="badge bg-secondary px-3 py-2">Sport</span>
                <span class="badge bg-secondary px-3 py-2">Tecnologia</span>
                <span class="badge bg-secondary px-3 py-2">Attualità</span>
            </div>
        </section>
    </main>
    
</x-layout>