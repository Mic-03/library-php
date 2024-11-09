<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $books = Book::latest()->paginate(10);

        //render view with products
        return view('books.index', compact('books'));
    }
}
