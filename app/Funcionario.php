<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    public $timestamps = false;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cpf', 'salario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function produtos() {
    	return $this->belongsToMany('App\Produto', 'vendas');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
