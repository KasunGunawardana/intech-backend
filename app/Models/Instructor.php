<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'description', 'tel', 'additional_contact', 'address', 'image', 'instructor_order'];

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
