<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
         
    $nome = [
        'Frigideira',
        'Sapato',
        'Tenis',
        'Panela',
        'Calça',
    ];
    $marca = [
        'Nike',
        'Adidas',
        'Polishop',
        'Bombril'
    ];

    return [
    	'nome' => $nome[rand(0,4)],
        'marca' => $marca[rand(0,3)],
        'id_fornecedor' => function() {
            $count = App\Fornecedor::get()->count();
            return App\Fornecedor::all()[rand(0, $count-1)];
        },
        'preco' => rand(50, 2000),
    ];
});
