<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminosController extends Controller
{
    public function index()
    {
        // Aquí puedes retornar la vista de la página de términos y condiciones
        return view('terminos');
    }
}
