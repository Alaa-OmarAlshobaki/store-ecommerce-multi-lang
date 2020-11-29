<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryValidRequest extends FormRequest
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
        if($)
        return [
            'slug'=>'required|unique:categories,slug,'.$this->id,
            'name'=>'required',
        ];
        return [
            'slug'=>'required|unique:categories,slug,'.$this->id,
            'name'=>'required',
            'parent_id'
        ];
    }
}