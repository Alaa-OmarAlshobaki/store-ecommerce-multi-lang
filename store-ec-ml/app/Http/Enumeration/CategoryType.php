<?php
namespace App\Http\Enumeration;
use Spatie\Enum\Enum;

final class CategoryType extends Enum{
    const mainCategory = 1;
    const subCategory = 2;
}


final class PriceType extends Enum{
    const percent = 0;
    const fixed = 1;

}

// public function rules()
// {
// $rules = [
// 'name' => 'required',
// ];
// foreach(CategoryType::getAll() as $key => $val)
// {
// $rules[$key] = 'required|in:'.$val;
// }
// return $rules;
// }