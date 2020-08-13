<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BuyrequestRequest extends FormRequest
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
            'category_id' =>'required',
            'name_en' => 'min:5|max:255',
            'name_uz' => 'min:5|max:255',
            'name_ru' => 'min:5|max:255',
            'email' => 'required|email',
            'company_en' => 'required|min:5|max:255',
            'company_uz' => 'required|min:5|max:255',
            'company_ru' => 'required|min:5|max:255',
            'wants_en'	=> 'required|min:5|max:1000',
            'wants_uz'	=> 'required|min:5|max:1000',
            'wants_ru'	=> 'required|min:5|max:1000',
            'amount_en'	=> 'required|min:5|max:20',
            'amount_ru'	=> 'required|min:5|max:20',
            'amount_uz'	=> 'required|min:5|max:20',
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
