<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerson extends FormRequest
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
            'FirstName'=>'required|alpha',
            'LastName'=>'required|alpha',
            'mail'=>'required|regex:/^(\w{2,})+@[a-zA-z]+\.[a-z]{2,3}$/|unique:persons',
            'img'=>'required|image|mimes:jpg,jpeg'
        
        ];
    }
}
