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
		$avaliacao->pratico= "pratico";
		$avaliacao->viavel= "viavel";
		$avaliacao->favoravel= "benefico";
		$avaliacao->tecnologico= "tecnologico";
		$avaliacao->pontos_fortes= "ponto_posit";
		$avaliacao->incompleto= "incompleto";
		$avaliacao->inviavel= "inviavel";
		$avaliacao->caro= "caro";
		$avaliacao->pontos_fracos= "ponto_neg";
		$avaliacao->inclusivo= "acessibilidade";
		$avaliacao->sustentavel= "sustentavel";
		$avaliacao->startup= "startup";
		$avaliacao->comunicacao= "men_oral";
		$avaliacao->escrita= "men_esc";
		$avaliacao->avaliacao= "mencao";
		$avaliacao->coment_tcc= "coment_TCC";
		$avaliacao->coment_mostra= "coment_feira";
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