<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{

    public $timestamps = false;

    protected $table = 'vendas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_funcionario', 'id_produto', 'id_cliente', 'quantidade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function Funcionario()
    {
    	// hasOne(RelatedModel, foreignKeyOnRelatedModel = ata_id, localKey = id)
    	return $this->belongsTo(Funcionario::class, 'id_funcionario');
    }

    public function Cliente()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = ata_id, localKey = id)
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    /**
     * Ata has many Encaminhamentos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }

}