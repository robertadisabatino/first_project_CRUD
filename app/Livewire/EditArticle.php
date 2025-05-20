<?php

namespace App\Livewire;

use Livewire\Component;

class EditArticle extends Component
{
    
    public $title;
    public $subtitle;
    public $body;
    public $article;

    public function mount(){
        $this->title= $this->article->title;
        $this->subtitle= $this->article->subtitle;
        $this->body= $this->article->body;
    }

    public function update(){
        $this->article->update([
            'title' => $this->title,
            'subtititle' => $this->subtitle,
            'body' => $this->body
        ]);
        session()->flash('message', 'Articolo modificato con successo');
    }

    public function delete(){
        $this->article->delete();
        return redirect(route('article.index'))->with('DeleteMessage', 'Articolo eliminato con successo');
    } 

    public function render()
    {
        return view('livewire.edit-article');
    }
}
