<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        $total = Produto::all()->count();
        return view('list-produtos', compact('produtos', 'total'));
    }

    public function create() {

        return view('include-produto');
    }

    public function store(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->id_sub_categoria = $request->id_sub_categoria;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Produto created successfully!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $produto = Produto::findOrFail($id);
        return view('alter-produto', compact('produto'));
    }

    public function update(Request $request, $id) {
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->id_sub_categoria = $request->id_sub_categoria;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Produto successfully changed!');
    }

    public function destroy($id) {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produto.index')->with('message', 'Produto deleted successfully!');
    }

}
