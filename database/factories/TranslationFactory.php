<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Translation;

$factory->define(Translation::class, function (Faker $faker) {
		$date_time = $faker->date . ' ' . $faker->time;
    return [
        'chinese'=>$faker->text(),
        'english'=>$faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
        'usagecount'=>$faker->randomDigit(),
        'lastusagedate' => $date_time,
    ];
});
