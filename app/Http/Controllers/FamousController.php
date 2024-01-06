<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamousController extends Controller
{
    public function index()
    {
        $topAuthors = Author::select('authors.id', 'authors.nama_author')
            ->selectRaw('AVG(ratings.nilai) as average_rating')
            ->selectRaw('COUNT(ratings.book_id) as jumlah_voters')
            ->leftJoin('bukus', 'bukus.author_id', '=', 'authors.id')
            ->leftJoin('ratings', 'ratings.book_id', '=', 'bukus.id')
            ->groupBy('authors.id', 'authors.nama_author')
            ->havingRaw('average_rating > ?', [5])
            ->orderByDesc('jumlah_voters')
            ->take(10)
            ->get();
    
        return view('famous', compact('topAuthors'));
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
