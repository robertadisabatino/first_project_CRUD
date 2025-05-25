<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles = Article::orderBy('created_at', 'desc')->simplePaginate(4);
        
        
        return view('welcome', compact('articles'));
    }

    public function counter(){
        return view('counter');
    }
}