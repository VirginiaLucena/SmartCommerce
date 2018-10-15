<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'telefone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id');
    }

    public function fornecedor()
    {
        return $this->hasOne('App\Fornecedor', 'id');
    }

    public function funcionario()
    {
        return $this->hasOne('App\Funcionario', 'id');
    }

}
