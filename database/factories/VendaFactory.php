<?php

use Faker\Generator as Faker;

$factory->define(App\Vendas::class, function (Faker $faker) {
	
    return [
        'id_funcionario' => function () {
			$count = App\Funcionario::get()->count();
        	return App\Funcionario::all()[rand(0, $count-1)];
        },
        'id_produto' => function () {
			$count = App\Produto::get()->count();
        	return App\Produto::all()[rand(0, $count-1)];
        },
        'id_cliente' => function () {
            $count = App\Cliente::get()->count();
            return App\Cliente::all()[rand(0, $count-1)];
        },
        'quantidade' => rand(1, 10)
    ];
});
