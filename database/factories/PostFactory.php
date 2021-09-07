<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 30),
        'district_id' => rand(1, 8),
        'title' => $this->faker->sentence(8),
        'name_bn' => $this->faker->sentence(20),
        'name_en' => $this->faker->sentence(20),
        'image' => $this->faker->date('YmdHi'),
        'status' => rand(0, 1),
    ];
});
