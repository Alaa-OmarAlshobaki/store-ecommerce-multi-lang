<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {

    return [
      'slug' =>$faker->slug(),
      'name' =>$faker->word(),
    ];
});
