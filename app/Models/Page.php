<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'heading', 'url', 'meta_title', 'meta_description', 'keywords', 'content', 'show_nav', 'contained_box', 'order', 'image'];
}
