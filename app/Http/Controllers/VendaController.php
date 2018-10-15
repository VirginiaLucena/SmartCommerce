<?php

namespace App\Http\Controllers;

use App\Vendas;
use App\Funcionario;
use App\Produto;
use App\Cliente;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendas.create', [
        	'funcionarios' => Funcionario::with('user')->get(),
        	'clientes' => Cliente::with('user')->get(),
        	'produtos' => Produto::get()
        ]);
    }

    public function list() {
        return view('vendas.index', ['vendas' => Vendas::with(['Funcionario', 'Cliente', 'Produto'])->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venda = new Vendas;
        $venda->id_funcionario = $request->id_funcionario;
        $venda->id_cliente = $request->id_cliente;
        $venda->id_produto = $request->id_produto;
        $venda->quantidade = $request->quantidade;
    
        $venda->save();

        return redirect()->route('vendasget');
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
        return view('vendas.edit', [
        	'funcionarios' => Funcionario::with('user')->get(),
        	'clientes' => Cliente::with('user')->get(),
        	'produtos' => Produto::get(),
        	'venda' => Vendas::where('id', $request->id)->with(['Funcionario', 'Cliente', 'Produto'])->first()
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

        Vendas::where('id', $request->id)->update([
        	'id_funcionario' => $request->id_funcionario, 
	        'id_cliente' => $request->id_cliente, 
	        'id_produto' => $request->id_produto, 
	        'quantidade' => $request->quantidade]);

        return redirect()->route('vendasget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Vendas::where('id', $request->id)->delete();

        return redirect()->route('vendasget');
    }

}
