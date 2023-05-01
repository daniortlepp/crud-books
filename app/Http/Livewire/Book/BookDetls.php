<?php

namespace App\Http\Livewire\Book;

use App\Repositories\BookRepository;
use LivewireUI\Modal\ModalComponent;

class BookDetls extends ModalComponent
{

    protected $modal;

    public $title;
    public $description;
    public $author;
    public $pages_number;
    public $created_at;
    public $id_book;

    public function mount($modal, $book)
    {
        $this->modal = $modal;

        if (!empty($book)) {
            $created_at = new \Datetime($book['created_at']);
            $this->title = $book['title'];
            $this->description = $book['description'];
            $this->author = $book['author'];
            $this->pages_number = $book['pages_number'];
            $this->created_at = $created_at->format('d/m/Y H:i:s');
            $this->id_book = $book['id'];
        }
    }

    public function render()
    {
        return view('livewire.book.book-detls')->with('modal', $this->modal);
    }

}