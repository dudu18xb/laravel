<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller {
    // criando uma injeção de dependencia

    private $carros_controllers;
    public function __construct(CarrosController $carro_controlador)
    {
        $this->carros_controllers = $carro_controlador;
    }

    public function index()
    {
        $list_pessoas = Pessoa::all();
        return view('pessoas.index', [
            'pessoas' => $list_pessoas
        ]);
    }

    public function novoView()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        // criando o metodo estatico
        $pessoa = Pessoa::create($request->all());
        if ($request->modelo && $request->placa){
            $carro = new Carro();
            $carro->modelo = $request->modelo;
            $carro->placa = $request->placa;
            $carro->pessoa_id = $pessoa->id;
            $this->carros_controllers->store($carro);
        }
        return redirect("/pessoas")->with("message","Pessoa criada com sucesso!");
    }
}
