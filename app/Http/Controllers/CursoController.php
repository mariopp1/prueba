<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    Public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        
        return view('cursos.show', compact('curso'));
    }
}
