<?php

namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class CardArticle extends Component
{
    protected $listeners = [
        'indexArticle'
    ];
    public function render()
    {
        $art = Article::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.card-article', ['art' => $art]);
    }
    public function indexArticle($article)
    {
        //dd($article);
    }
}
