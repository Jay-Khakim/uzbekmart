<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_en' => 'required|min:5|max:255',
            'service_uz' => 'required|min:5|max:255',
            'service_ru' => 'required|min:5|max:255',
            'slug_en' => 'max:255',
            'company_id'=>'required',
            // 'subcategory_id'=>'required',
            'tag_id'=>'required',
            // 'companytype'=>'required',
            'desc_en' => 'required|min:5|max:3000',
            'desc_uz' => 'required|min:5|max:3000',
            'desc_ru' => 'required|min:5|max:3000',
            'status' => 'required',
            'web'=> 'required|url',
            'email'=> 'required|email', 
            'image' => 'required',
            'phone' => 'required|integer',
            'address_en'=> 'required',
            'address_uz'=> 'required',
            'address_ru'=> 'required'
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
