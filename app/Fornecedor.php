<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    public $timestamps = false;
    //
    protected $fillable = ['id'];

    protected $table = 'fornecedores';

    public function produtos() {
    	return $this->hasMany('App\Produto', 'id', 'id_fornecedor');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
