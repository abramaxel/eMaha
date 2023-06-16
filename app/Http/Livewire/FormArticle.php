<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Article;

class FormArticle extends Component
{
    public $judul;
    public $deskripsi;
    public function render()
    {
        return view('livewire.form-article');
    }
    public function simpan()
    {
        $article = Article::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi
        ]);
        $this->resetInput();

        //trigger
        $this->emit('indexArticle', $article);
    }
    
    private function resetInput()
    {
        $this->judul = null;
        $this->deskripsi = null;

    }
}
