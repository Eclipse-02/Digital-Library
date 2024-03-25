<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\DataTables\BooksDataTable;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BooksDataTable $dataTable)
    {
        return $dataTable->render('scaffolds.books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publishers = Publisher::all();
        $categories = Category::all();

        return view('scaffolds.books.create', compact('publishers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:pdf,epub',
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'year' => 'required|numeric',
            'book_count' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            toast('Something went wrong!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $new_data = Book::create([
                'title' => $request->title,
                'writer' => $request->writer,
                'publisher_id' => $request->publisher,
                'category_id' => $request->category,
                'year' => $request->year,
                'book_count' => $request->book_count
            ]);

            if ($request->file('file')) {
                $request->file('file')->move(storage_path('app/public/storage/books'), 'book-' . Carbon::now()->format('Y-m-d-His') . '.' . $request->file('file')->getClientOriginalExtension());
                Book::where('id', $new_data->id)->update(['file_name' => 'book-' . Carbon::now()->format('Y-m-d-His') . '.' . $request->file('file')->getClientOriginalExtension()]);
            }

            toast('Data successfully created!', 'success');
            return redirect()->route('books.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $data = $book;

        return view('scaffolds.books.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $data = $book;
        $publishers = Publisher::all();
        $categories = Category::all(); 

        return view('scaffolds.books.edit', compact('data', 'publishers', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'year' => 'required|numeric',
            'book_count' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            toast('Something went wrong!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $book->update([
                'title' => $request->title,
                'writer' => $request->writer,
                'publisher_id' => $request->publisher,
                'category_id' => $request->category,
                'year' => $request->year,
                'book_count' => $request->book_count
            ]);

            toast('Data successfully created!', 'success');
            return redirect()->route('books.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        toast('Data deleted successfully!', 'success');
        return redirect()->route('books.index');
    }
}
