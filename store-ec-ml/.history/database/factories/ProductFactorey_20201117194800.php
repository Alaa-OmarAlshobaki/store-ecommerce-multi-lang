<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $filepath = storage_path('images');

  if (!File::exists($filepath)) {
      File::makeDirectory($filepath);
  }
    return [
      'name' =>$faker->word(),
      'slug' =>$faker->slug(),
      'is_active'=>$faker->boolean(),
      'image'=>$faker->image($filepath),
    ];
});
