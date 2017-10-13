<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {

    protected $fillable = [
        'id',
        'nome'
    ];
    protected $table = "pessoas";

    public function modelos() {
        return $this->hasMany(Carro::class, 'pessoa_id');
    }

}
