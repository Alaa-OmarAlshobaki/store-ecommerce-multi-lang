<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
      'name' =>$faker->word(),
      'slug' =>$faker->slug(),
      'is_active'=>$faker->boolean(),
    ];
});
