<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'nilai'];
    public function buku()
    {
        return $this->belongsTo(buku::class, 'book_id');
    }
}
