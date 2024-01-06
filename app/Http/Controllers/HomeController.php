<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\buku;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $nama_author = Author::all();
    $kategori = Category::all();
    $rating = Rating::all();

    $booksQuery = Buku::query();
    $perPage = $request->input('listShown', 10);

    if ($request->has('search') && !empty($request->input('search'))) {
        $keyword = $request->input('search');
        $booksQuery->where(function ($query) use ($keyword) {
            $query->where('judul', 'like', "%$keyword%")
                ->orWhereHas('author', function ($authorQuery) use ($keyword) {
                    $authorQuery->where('nama_author', 'like', "%$keyword%");
                });
        });
    }

    $booksQuery->with('kategori', 'author', 'ratings')
        ->withAvg('ratings', 'nilai') 
        ->orderByDesc('ratings_avg_nilai'); 

    if ($perPage !== 'all') {
        $books = $booksQuery->take($perPage)->get();
    } else {
        $books = $booksQuery->get();
    }

    
    return view('includes.default', compact('books'));
}


    



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
