<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'url', 'heading', 'sub_heading', 'meta_title', 'meta_description', 'keywords', 'content', 'syllabus', 'requirements', 'duration', 'price', 'level', 'medium','course_type_id', 'instructor_id', 'image', 'course_order'];

    // public function deleteImage() {
    //     Storage::delete($this->image);
    // }

    public function course_type() {
        return $this->belongsTo(CourseType::class);
    }

    public function instructor() {
        return $this->belongsTo(Instructor::class);
    }
}
