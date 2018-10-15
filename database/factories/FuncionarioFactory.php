<?php

use Faker\Generator as Faker;
use Faker\Provider\pt_BR\Person as BrasilFaker;

$factory->define(App\Funcionario::class, function (Faker $faker) {
	$bf = new BrasilFaker($faker);

    return [
    	'id' => function() {
            $count = App\User::get()->count();
            return $count;
        },
        'cpf'=>$bf->cpf(false),
        'salario' => rand(2000, 10000)
    ];
});