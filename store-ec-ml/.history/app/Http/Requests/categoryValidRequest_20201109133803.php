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
    public function rules($typeStore )
    {
        if($typeStore === 'category' ){
        return [
            'slug'=>'required|unique:categories,slug,'.$this->id,
            'name'=>'required',
        ];
    }elseif($typeStore === 'subcategory'){
        return [
            'slug'=>'required|unique:categories,slug,'.$this->id,
            'name'=>'required',
            'parent_id'=>''
        ];}
    }
}