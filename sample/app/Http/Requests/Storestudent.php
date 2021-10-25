<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storestudent extends FormRequest
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
            
            'name'=>'required',
            'mark1'=>'required|Integer',
            'mark2'=>'required|Integer',
            'mark3'=>'required|Integer'
        ];
    }
}
