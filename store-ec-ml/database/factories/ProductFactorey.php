<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
 
    return [
      'name' =>$faker->text(),
      'description'=>$faker->paragraph(),
      'price'=>$faker->numberBetween(10,9000),
      'mange_stock'=>false,
      'in_stock'=>$faker->boolean(),
      'viewed'=>0,
      'slug' =>$faker->slug(),
      'sku'=>$faker->word,
      'is_active'=>$faker->boolean(),
    ];
});
