<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratorio;

class LaboratorioControler extends Controller
{
    public function index()
	{
		$laboratorio = Laboratorio::find(3);
    return $laboratorio;
}
}
