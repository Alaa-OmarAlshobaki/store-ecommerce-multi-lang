<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceValidRequest extends FormRequest
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
            'price' => '',
            'special_price' => '',
            'special_price_type' => '',
            'special_price_start' => '',
            'special_price_end' => '',

        ];
    }
}
