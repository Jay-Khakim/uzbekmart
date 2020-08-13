<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name_en' => 'required|min:5|max:255',
            'name_uz' => 'required|min:5|max:255',
            'name_ru' => 'required|min:5|max:255',
            'slug_en' => 'required|min:5|max:255',
            'desc_en' => 'required|min:5|max:3000',
            'desc_uz' => 'required|min:5|max:3000',
            'desc_ru' => 'required|min:5|max:3000',
            'tag_id' => 'required',
            'company_id' => 'required',
            'image' => 'required'
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
