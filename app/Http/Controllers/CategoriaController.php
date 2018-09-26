<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        $total = SubCategoria::all()->count();
        return view('list-produto', compact('categorias', 'total'));
    }
}
