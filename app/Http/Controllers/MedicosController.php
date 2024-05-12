<?php

namespace App\Http\Controllers;

use App\Models\Medicos;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    //Devolver todos los medicos de la base de datos
    public function index() {
        $medicos = Medicos::all(); //Devolver todos los médicos

        //Mostrar una lista con los medicos
        return view('medicos.index', compact('medicos'));
    }
}
