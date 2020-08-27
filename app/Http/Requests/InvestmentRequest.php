<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class InvestmentRequest extends FormRequest
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
            'category_id' => 'required',
            'title_en' => 'required|min:5|max:200',
            'title_ru' => 'required|min:5|max:200',
            'title_uz' => 'required|min:5|max:200',
            'slug_en' => 'max:200',
            'address_en' => 'required|min:5|max:200',
            'address_ru' => 'required|min:5|max:200',
            'address_uz' => 'required|min:5|max:200',
            'amount' => 'required',
            'payback' => 'required',
            'avaragepower_en' => 'required',
            'avaragepower_uz' => 'required',
            'avaragepower_ru' => 'required',
            'iir' => 'required',
            'npv' => 'required',
            'workplaces' => 'required',
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
