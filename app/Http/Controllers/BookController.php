<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if (empty($query)) {
            $books = Book::paginate(10)->withQueryString();
        } else {
            $books = Book::where('title', 'like', '%'.$query.'%')->paginate(10)->withQueryString();
        }

        return view('books.index', compact('books'), ['query' => $query]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'author' => 'required',
            'page_count' => 'required'
        ]);

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'page_count' => $request->page_count
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'author' => 'required',
            'page_count' => 'required'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully.');
    }
}
