<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryList extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'content', 'order'];

    public function gallery_images() {
        return $this->belongsToMany(GalleryImage::class);
    }
}
