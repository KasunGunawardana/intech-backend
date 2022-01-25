<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
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
            'name' => 'required|unique:pages',
            'heading' => 'required',
            'meta_title' => 'required|max:80',
            'meta_description' => 'required|max:400',
            'keywords' => 'required',
            'content' => 'required',
            'image' => 'image|max:3072',
        ];
    }
}
