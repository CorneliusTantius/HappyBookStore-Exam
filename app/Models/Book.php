<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function details(){
        return $this->hasOne(Detail::class, 'book_id', 'book_id');
    }
}
