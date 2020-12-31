<?php

namespace App\Http\Requests;

use App\Rules\OptionValid;
use Illuminate\Foundation\Http\FormRequest;

class OptionValidRequest extends FormRequest
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
            'price' => 'required',
            'attribute_id' => 'required|exists:attributes,id',
            'product_id' => 'required|exists:products,id',
            'id' => [new OptionValid($this->id)]
        ];
    }
}
