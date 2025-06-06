<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold text-dark" href="#">Il Giornale</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('article.create')}}">Crea articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('article.index')}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{route('counter')}}">Counter</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('article.edit', $article)}}">Articoli</a>
                </li> --}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 border rounded-pill" type="search" placeholder="Cerca..." aria-label="Search" />
                <button class="btn btn-outline-dark rounded-pill" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
