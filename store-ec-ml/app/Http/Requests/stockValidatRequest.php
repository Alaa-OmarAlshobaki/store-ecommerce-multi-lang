<?php

namespace App\Http\Requests;

use App\Rules\MangeStock;
use Illuminate\Foundation\Http\FormRequest;

class stockValidatRequest extends FormRequest
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
            'sku' => 'nullable|min:3|max:10',
            'mange_stock' => 'required|in:0,1',
            // 'qty' => 'required_if:mange_stock,==,1',
            'qty'=>[new MangeStock($this->mange_stock)],
            'in_stock' => 'required|in:0,1',
            'product_id' => 'required|exists:products,id',
        ];
    }
}
