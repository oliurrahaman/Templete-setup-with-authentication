<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productFormValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'category'=>'required',
            'img'=>'required',
            'date'=>'required',
            'unit'=>'required',
            'price'=>'required',
            'country'=>'required',
            'sale_range'=>'required',
            'time'=>'required',
            'features'=>'required'

        ];
    }
}
