<?php

namespace App\Http\Requests;

use App\Http\Enumeration\PriceType;
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
           'product_id' => 'required|exists:products,id',
            'price' => 'required|min:0|numeric',
            'special_price' => 'nullable|numeric',
            //'special_price_type' => 'requests_with:special_price|in:'.PriceType::percent.','.PriceType::fixed,
            'special_price_type' => 'required_with:special_price|in:fixed,percent',
            'special_price_start' => 'nullable|required_with:special_price|date_format:Y-m-d',
            'special_price_end' => 'nullable|required_with:special_price|date_format:Y-m-d',

        ];
    }
}
