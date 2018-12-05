<?php

use Faker\Generator as Faker;

$factory->define(App\Models\testPro::class, function (Faker $faker) {
    $classList = $faker->randomElement([
        "[23,24,21,25]",
        "[23,26,22]",
        "[23,24,21,29,21]",
        "[26,27,21,22]",
        "[23,21,25]",
        "[23,21,27,20]",
        "[22,28,21,25]",
        "[22]",
        "[23,24,29]",
        "[23,24,20,27]",
        "[20,29]",
        "[21,27,26]",
        "[21]",
        "[25]"
    ]);
    return [
        'name' => $faker->word,
        'price' => $faker->randomNumber(4),
        'class_id' => $classList
    ];
});
