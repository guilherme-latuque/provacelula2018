<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function index() {
        $subcategorias = SubCategoria::all();
        $total = SubCategoria::all()->count();
        return view('include-produto', compact('subcategorias', 'total'));
    }
}
