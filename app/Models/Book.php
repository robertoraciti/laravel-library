<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "author",
        "genre_id",
        "plot",
        "isbn",
        "publishing_year",
        "pages",
        "price"
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}