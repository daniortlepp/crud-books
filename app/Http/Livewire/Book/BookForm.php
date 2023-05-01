<?php

namespace App\Http\Livewire\Book;

use App\Repositories\BookRepository;
use LivewireUI\Modal\ModalComponent;

class BookForm extends ModalComponent
{

    protected $modal;

    public $title;
    public $description;
    public $author;
    public $pages_number;
    public $id_book;

    public function mount($modal, $book)
    {
        $this->modal = $modal;

        if (!empty($book)) {
            $this->title = $book['title'];
            $this->description = $book['description'];
            $this->author = $book['author'];
            $this->pages_number = $book['pages_number'];
            $this->id_book = $book['id'];
        }
    }

    public function render()
    {
        return view('livewire.book.book-form')->with('modal', $this->modal);
    }

    public function createbook() {
        app(BookRepository::class)->create(array(
            'title' => $this->title,
            'description' => $this->description,
            'author' => $this->author,
            'pages_number' => $this->pages_number,
        ));
        $this->emit('closeModal', 'book.book-form');
        redirect(request()->header('Referer'));
    }

    public function updatebook() {
        app(BookRepository::class)->update(array(
            'title' => $this->title,
            'description' => $this->description,
            'author' => $this->author,
            'pages_number' => $this->pages_number,
        ), $this->id_book);
        $this->emit('closeModal', 'book.book-form');
        redirect(request()->header('Referer'));
    }

}