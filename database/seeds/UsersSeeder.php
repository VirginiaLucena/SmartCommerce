<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)
        	->create()
        	->each(function($user){
                switch (rand(1, 3)) {
                    case 1:
                        $user->cliente()->save(factory(App\Cliente::class)->make());
                        break;
                    case 2:
                        $user->funcionario()->save(factory(App\Funcionario::class)->make());
                        break;
                    default:
                        $user->fornecedor()->save(factory(App\Fornecedor::class)->make());
                        break;
                }
            });
    }
}