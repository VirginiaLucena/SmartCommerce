<?php

namespace App\Http\Controllers;

use App\User;
use App\Produto;
use App\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtos.create', ['fornecedores' => Fornecedor::with('user')->get()]);
    }

    public function list() {
        return view('produtos.index', ['produtos' => Produto::with('fornecedor')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->id_fornecedor = $request->id_fornecedor;
        $produto->preco = $request->preco;
    
        $produto->save();

        return redirect()->route('produtosget');
    }


    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('produtos.edit', [
            'produto' => Produto::where('id', $request->id)->with('fornecedor')->first(),
            'fornecedores' => Fornecedor::with('user')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Produto::where('id', $request->id)->update([
            'nome' => $request->nome,
            'marca' => $request->marca,
            'id_fornecedor' => $request->id_fornecedor,
            'preco' => $request->preco
        ]);

        return redirect()->route('produtosget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Produto::where('id', $request->id)->delete();

        return redirect()->route('produtosget');
    }
}
