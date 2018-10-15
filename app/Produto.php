<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    public $timestamps = false;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'marca', 'id_fornecedor', 'preco'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function fornecedor() {
    	return $this->belongsTo('App\Fornecedor', 'id_fornecedor', 'id');
    }
}
