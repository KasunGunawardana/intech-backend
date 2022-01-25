<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Ckeditor extends Model
{
    use HasFactory;

    protected  $except = [ '/image-upload' ];
}
