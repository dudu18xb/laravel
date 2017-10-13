<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model {

    protected $fillable = [
        'id',
        'modelo',
        'placa',
        'pessoa_id'
    ];
    protected $table = 'carros';

    public function pessoa() {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

}
