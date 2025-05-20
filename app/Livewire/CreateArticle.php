<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required|min:5|max:255')]
    public $title;
    #[Validate('required|min:5|max:255')]
    public $subtitle;
    #[Validate('required|min:10')]
    public $body;

    // protected function rules(){
    //     return [
    //         'title' => 'required|min:5|max:255',
    //         'subtitle' => 'required|min:5|max:255',
    //         'body' => 'required|min:10'
    //     ];
    // }

    protected function messages()
    {
        return[

            'required' => 'Il campo :attribute è obbligatorio',
            'min' => 'Il campo :attribute deve avere almeno :min caratteri',
            'max' => 'Il campo :attribute deve avere al massimo :max caratteri',
        ];
    }

    // Validation rules for the form - non abbiamo la request, quindi dobbiamo recuperare i dati tramite il data binding 
    public function store(){
        // prima valida i dati del form
        $this->validate();
        // poi crea l'articolo
        $article = Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);
        // poi resetta le proprieta del form
        $this->reset();
        // poi reindirizza alla stessa pagina 
        session()->flash('message', 'Articolo creato con successo');
            
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
