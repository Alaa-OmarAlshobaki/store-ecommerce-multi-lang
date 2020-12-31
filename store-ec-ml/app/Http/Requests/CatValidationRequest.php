<?php

namespace App\Http\Requests;

use App\Rules\SubCat;
use App\Http\Enumeration\CategoryType;
use Illuminate\Foundation\Http\FormRequest;

class CatValidationRequest extends FormRequest
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

            'slug'=>'required|unique:categories,slug,'.$this->id,
            'name'=>'required',
             // 'type'=>'required|in:1,2',
            'type'=>'required|in:'.CategoryType::mainCategory.','.CategoryType::subCategory,//......1
            'parent_id'=>'required_if:type,==,2',

            // 'parent_id'=> [new SubCat($this->type)],
            'image'=>'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        // foreach(CategoryType::getAll() as $key => $val)
        // {
        // $rules[$key] = 'required|in:'.$val;
        // }
        // return $rules;

    }


    
}
