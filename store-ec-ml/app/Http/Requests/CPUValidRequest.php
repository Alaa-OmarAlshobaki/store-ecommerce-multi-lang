<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CPUValidRequest extends FormRequest
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
            'name' => 'required',
            'email'=>'required|unique:admins,email,'.$this->id,
            'password'=>'confirmed|required|min:12',
            'password_confirmation' => 'required ',

        ];
    }
}
