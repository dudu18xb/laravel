<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller {
    private $carros_controller;
    private $pessoa;

    // criando uma injeção de dependencia
    public function __construct(CarrosController $carros_controller)
    {
        $this->carros_controller = $carros_controller;
        // para ter acesso na area global
        $this->pessoa = new Pessoa();
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
        // efetuando o cadastro de carro obs: isso faz com que nao tiver como cadastrar um carro se a pessoa ainda nao existe
        if($request->modelo && $request->placa){
            $carro = new Carro();
            $carro->modelo = $request->modelo;
            $carro->placa = $request->placa;
            $carro->pessoa_id = $pessoa->id;
            $this->carros_controller->store($carro);
        }
        // redirecionando para a pagina de lista
        return redirect("/pessoas")->with("message","Pessoa criada com sucesso!");
    }

    public function editarView($id)
    {
        // chamando a view para editar com passando o ID/EDITAR
        return view('pessoas.edit', [
            'pessoa' => $this->getPessoa($id)
        ]);
    }
    // criando o metodo publico para efetuar o update
    public function update(Request $request)
    {
        $pessoa = $this->getPessoa($request->id);
        //atualizando este usuario com base o request
        $pessoa->update($request->all());
        return redirect('/pessoas');
    }

    protected function getPessoa($id)
    {
        return $this->pessoa->find($id);
    }

}
