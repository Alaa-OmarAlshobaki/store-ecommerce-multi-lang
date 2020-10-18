<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidLogin extends FormRequest
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
            'email'=>'required|unique:admins,email|email',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'required',
            'email'=>'required|unique:admins,email|email',
            'password'=>'required'
        ];
    }
}