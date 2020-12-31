<?php

namespace App\Http\Requests;

use App\Rules\AttributeValidation;
use Illuminate\Foundation\Http\FormRequest;

class AttributeValidRequest extends FormRequest
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
            // 'name'=>'required|max:100|unique:attribute_translations,name,'.$this->id,//  .........1
           
            'name' => ['required','max:100',new AttributeValidation($this ->name,$this -> attribute_id)]
        ];
    }
}
