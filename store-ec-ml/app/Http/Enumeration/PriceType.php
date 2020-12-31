<?php
namespace App\Http\Enumeration;
use Spatie\Enum\Enum;


final class PriceType extends Enum{
    const percent = 0;
    const fixed = 1;

}