<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePerson extends FormRequest
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
                'mail'=>['required',Rule::unique('persons')->ignore($this->persons->id)],
                'img'=>'required|image|mimes:jpg,jpeg'        
        ];
    }
}
