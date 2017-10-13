<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function store(Carro $carro)
    {
        var_dump($carro->modelo, $carro->placa);
    }
}
