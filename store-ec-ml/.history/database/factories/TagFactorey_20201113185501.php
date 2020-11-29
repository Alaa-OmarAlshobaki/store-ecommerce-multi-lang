<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
  $filepath = storage_path('images');

  if (!File::exists($filepath)) {
      File::makeDirectory($filepath);
  }
    return [
      'slug' =>$faker->slug(),
      'name' =>$faker->word(),
    ];
});