<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\TCC;
use App\Models\Curso;
use Illuminate\Support\Facades\Session;


class AvaliadorController extends Controller
{


	public function salvar(Request $request)
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
		$avaliacao->inclusivo= " ";
		$avaliacao->sustentavel= "sustentavel";
		$avaliacao->startup= "startup";
		$avaliacao->comunicacao= " ";
		$avaliacao->escrita= " ";
		$avaliacao->avaliacao= "mencao";
		$avaliacao->coment_tcc= " ";
		$avaliacao->coment_mostra= " ";
	}

    public function avaliarView()
	{
		$avaliacoes = Avaliacao::all();
		$cursos = Curso::all();
		$TCCs= TCC::all();

		return view('avaliacao-aluno', [
			'TCCs' => $TCCs,
			'cursos' => $cursos,
		]);
	}

}