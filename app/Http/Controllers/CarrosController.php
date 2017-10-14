<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function store(Carro $modelo)
    {
        try{
            $modelo->save();
        } catch (\Exception $e){
            return "Erro: " . $e->getMessage();
        }

    }
}
