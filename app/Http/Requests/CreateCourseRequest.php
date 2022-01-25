<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:courses',
            'heading' => 'required',
            'sub_heading' => 'required',
            'meta_title' => 'required|max:120',
            'meta_description' => 'required|max:400',
            'keywords' => 'required',
            'content' => 'required',
            'syllabus' => 'required',
            'requirements' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'image' => 'required|image|max:3072',
            'course_type' => 'required',
            'instructor' => 'required'
        ];
    }
}
