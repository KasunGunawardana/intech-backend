<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'url', 'content', 'image', 'category_id', 'views'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
