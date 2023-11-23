<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\Aval_Prof;
use App\Models\TCC;
use App\Models\Curso;
use Illuminate\Support\Facades\Session;

 
class AvaliadorController extends Controller
{
    public function salvar(Request $request)
	{
		$form = $request->all();
		$avaliacao = new Avaliacao;
		$avaliacao->id_tcc =$form["TCC"];
		$avaliacao->nome= $form["nome"];
		$avaliacao->id_curso= $form["curso"];
		$avaliacao->modulo= $form["modulo"];
		$avaliacao->apresentacao= $form["apresentacao"];
		$avaliacao->stand= $form["stand"];
		$avaliacao->pratico= @$form["pratico"];
		$avaliacao->viavel= @$form["viavel"];
		$avaliacao->favoravel= @$form["benefico"];
		$avaliacao->tecnologico= @$form["tecnologico"];
		$avaliacao->pontos_fortes= @$form["ponto_posit"];
		$avaliacao->incompleto= @$form["incompleto"];
		$avaliacao->inviavel= @$form["inviavel"];
		$avaliacao->caro= @$form["caro"];
		$avaliacao->pontos_fracos= @$form["ponto_neg"];
		$avaliacao->inclusivo= $form["acessibilidade"];
		$avaliacao->sustentavel= @$form["sustentavel"];
		$avaliacao->startup= @$form["startup"];
		$avaliacao->comunicacao= $form["men_oral"];
		$avaliacao->escrita= $form["men_esc"];
		$avaliacao->avaliacao= $form["mencao"];
		$avaliacao->coment_tcc= @$form["coment_TCC"];
		$avaliacao->coment_mostra= @$form["coment_feira"];
		$avaliacao->save();
		return view('enviado');
	}

	public function selecao(Request $request)
	{
		$avaliacoes = Avaliacao::all();
		$cursos = Curso::all();
		$TCCs= TCC::all();

		return view('selecao', [
			'TCCs' => $TCCs,
			'cursos' => $cursos,
		]);
		
		
	}

	public function resultado(Request $request)
	{
		$id=$request->input('id');
		$TCC=TCC::find($id);
		$avaliacoes = Avaliacao::all();
		return view('resultado',
	[
		'TCC'=>$TCC,
		'Avaliacoes'=>$avaliacoes
	]);
		
	}

	public function detalhado(Request $request){
		$id=$request->input('id');
		$avaliacao=Avaliacao::find($id);
		$detalhado = Avaliacao::all();
		return view('detalhado',
		[
			'Avaliacao'=>$avaliacao,
			'detalhado'=>$detalhado
		]);
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

	public function avaliacao_professor()
	{
		$avaliacoes = Avaliacao::all();
		$cursos = Curso::all();
		$TCCs= TCC::all();

		return view('avaliacao-professor', [
			'TCCs' => $TCCs,
			'cursos' => $cursos,
		]);
	}

	public function salvar_prof(Request $request)
	{
		$form = $request->all();
		$avaliacao = new Aval_Prof;
		$avaliacao->id_tcc =@$form["TCC"];
		$avaliacao->professor= @$form["nome"];
		$avaliacao->comunicacao= @$form["men_oral"];
		$avaliacao->habilidades= @$form["habilidades"];
		$avaliacao->criatividade= @$form["criatividade"];
		$avaliacao->dinamica= @$form["dinamica"];
		$avaliacao->canvas= @$form["canvas"];
		$avaliacao->impacto= @$form["impacto"];
		$avaliacao->inclusao= @$form["inclusao"];
		$avaliacao->feteps= @$form["feteps"];
		$avaliacao->inova= @$form["inova"];
		$avaliacao->workshop= @$form["workshop"];
		$avaliacao->outro= @$form["outro"];
		$avaliacao->coment_tcc= @$form["coment_tcc"];
		$avaliacao->coment_mostra= @$form["coment_mostra"];
		$avaliacao->startup= @$form["startup"];
		$avaliacao->comunicacao= @$form["men_oral"];
		$avaliacao->escrita= @$form["men_esc"];
		$avaliacao->avaliacao= @	$form["mencao"];
		$avaliacao->save();
		return view('enviado');
	}

}