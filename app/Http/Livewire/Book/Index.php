<?php

namespace App\Http\Livewire\Book;

use Illuminate\Http\Request;

use App\Repositories\BookRepository;
use Livewire\Component;

class Index extends Component
{
    protected $bookRepository;

    public function mount(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function render(Request $request)
    {
        if (null != $this->bookRepository) {
            $books = $this->bookRepository->getAll($request->search);
        } else {
            /** Handle case if refresh users table */
            $books = app(BookRepository::class)->getAll($request->search);
        }

        if (isset($books)) {
            return view('livewire.book.index', compact('books'));
        } else {
            return [];
        }
    }

    public function deletebook($id_book) {
        app(BookRepository::class)->delete($id_book);
        redirect(request()->header('Referer'));
    }

}
