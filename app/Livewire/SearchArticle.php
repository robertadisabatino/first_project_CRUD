<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class SearchArticle extends Component
{
    public $search = '';

    public function render()
    {
        if(!$this->search){
            $articles = Article::all();
        }else {
            // se NON METTO la % all'inizio, verranno filtrate le parole che SOLO all'inizio contengono le lettere inserite dall'utente. e viceversa.
            $articles = Article::where('title', 'like', "%$this->search%")
                                ->orWhere('subtitle', 'like', "%$this->search%")
                                ->get();
        }
        return view('livewire.search-article', ['articles' => $articles]);
    }
}
