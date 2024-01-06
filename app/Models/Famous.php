<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famous extends Model
{
    use HasFactory;

    // public function bukus()
    // {
    //     return $this->hasMany(Buku::class, 'author_id');
    // }

    // public function topAuthors()
    // {
    //     return $this->select('authors.id', 'authors.nama_author')
    //         ->selectRaw('COUNT(ratings.id) as jumlah_voters')
    //         ->selectRaw('AVG(ratings.nilai) as average_rating')
    //         ->join('bukus', 'authors.id', '=', 'bukus.author_id')
    //         ->leftJoin('ratings', 'bukus.id', '=', 'ratings.book_id')
    //         ->groupBy('authors.id', 'authors.nama_author')
    //         ->havingRaw('AVG(ratings.nilai) > ?', [5])
    //         ->orderByDesc('jumlah_voters')
    //         ->limit(10)
    //         ->get();
    // }
}
