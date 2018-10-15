<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
    	'id' => function() {
            $count = App\User::get()->count();
            return $count;
        }
    ];
});
