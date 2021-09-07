<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name_bn' => $this->faker->sentence(3),
        'name_en' => $this->faker->sentence(3),
        'status' => rand(0, 1),
    ];
});
