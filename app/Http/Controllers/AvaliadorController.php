<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;
use App\Models\avaliacao;
use Illuminate\Support\Facades\Session;


class AvaliadorController extends Controller
{
    public function listar()
	{
		$form = $request->all();
		$avaliacao = new Avaliacao;
		$avaliacao->id_tcc ="TCC";
		$avaliacao->nome= "nome";
		$avaliacao->id_curso= "curso";
		$avaliacao->modulo= "modulo";
		$avaliacao->apresentacao= "apresentacao";
		$avaliacao->stand= "stand";
		$avaliacao->pratico= "";
		$avaliacao->viavel= " ";
		$avaliacao->favoravel= " ";
		$avaliacao->tecnologico= " ";
		$avaliacao->pontos_fortes= " ";
		$avaliacao->incompleto= " ";
		$avaliacao->inviavel= " ";
		$avaliacao->caro= " ";
		$avaliacao->pontos_fracos= " ";
		$avaliacao->inclusivo= "acessibilidade";
		$avaliacao->sustentavel= "sustentavel";
		$avaliacao->startup= "startup";
		$avaliacao->comunicacao= " ";
		$avaliacao->escrita= " ";
		$avaliacao->avaliacao= "mencao";
		$avaliacao->coment_tcc= "coment_TCC";
		$avaliacao->coment_mostra= "coment_feira";
	}

    public function avaliarView()
	{
		return view('avaliar');
	}

    public function avaliarForm(Request $form)
	{
		$cursos = Curso::select('nome')->distinct()->get()->pluck('nome');
	}
}