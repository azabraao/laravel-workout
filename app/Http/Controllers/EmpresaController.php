<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller {

  public function index(Request $request) {
        
    $empresas = Empresa::query()->orderBy('nome')->get();
    $mensagem = $request->session()->get('mensagem');
    $request->session()->remove('mensagem');

    return view('empresas.index', compact('empresas', 'mensagem'));
  }

  public function create() {
    return view('empresas.adicionar');
  }

  public function store(Request $request) {
    $nome = $request->nome;
    $empresa = Empresa::create($request->all());
    
    $request
    ->session()
    ->flash(
      'mensagem',
      "Empresa com ID {$empresa->id} - {$empresa->nome} criada com sucesso"
    );
    
    return redirect('/empresas');
  }

  public function destroy(Request $request) {
    Empresa::destroy($request->id);

    $request
    ->session()
    ->flash(
      'mensagem',
      "Empresa excluida com sucesso"
    );
    
    return redirect('/empresas');
    
  }
}