<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id'); 
    }
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id'); 
    }
    public function rating()
    {
        return $this->hasOne(Rating::class, 'book_id');
    }
    
    public function ratings()
    {
        return $this->hasMany(Rating::class, 'book_id');
    }
    

    // ambil jumlah voter nya
    public function getJumlahVotersAttribute()
    {
        return $this->ratings()->count();
    }
    
     // Method untuk mengambil rata-rata nilai rating dari suatu buku
     public function getAverageRatingAttribute()
     {
         $totalRating = $this->ratings()->count();
         if ($totalRating > 0) {
             $totalNilai = $this->ratings()->sum('nilai');
             return number_format($totalNilai / $totalRating, 2);
         }
         return 0;
     }

}
