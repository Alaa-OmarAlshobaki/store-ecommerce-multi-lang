<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingValidRequest extends FormRequest
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
         
            'id' => 'required|exist:setting',
            'plain_value' => 'nullable|n'
        ];
    }
    public function messages()
    {
        return [
            // 'name.required' => 'name is required',
            'email.required' => 'email is required',
            'password' => 'password is required'
        ];
    }
}
