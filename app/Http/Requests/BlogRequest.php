<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tag_id' => 'required',
            'title_en' => 'required|min:4|max:300',
            'title_uz' => 'required|min:4|max:300',
            'title_ru' => 'required|min:4|max:300',
            'slug_en' => 'required|min:4|max:300',
            'body_en' => 'required|min:4|max:5000',
            'body_uz' => 'required|min:4|max:5000',
            'body_ru' => 'required|min:4|max:5000',

        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
