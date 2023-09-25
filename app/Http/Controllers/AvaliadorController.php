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
		// Lista os registros
	}

	public function avaliar()
	{
		
	}

    public function avaliarView()
	{
		return view('avaliar');
	}

    public function avaliarForm(Request $form)
	{

	}
}