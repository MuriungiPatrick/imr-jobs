<?php

use Faker\Generator as Faker;


$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title'=>$faker->words(rand(5,7),true),
        'description'=>$faker->sentence(rand(4,6),true),
        'slug'=>$faker->unique()->slug,
        'updated_at'=>now(),
        'created_at'=>now()
    ];
});
