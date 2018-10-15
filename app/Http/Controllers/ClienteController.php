<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.create');
    }

    public function list() {
        return view('clientes.index', ['clientes' => Cliente::with('user')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->remember_token = str_random(10);
        $user->password = \Hash::make($request->senha);

        $user->save();

        $cliente = new Cliente;
        $cliente->id = $user->id;

        $cliente->save();

        return redirect()->route('clientesget');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('clientes.edit', ['cliente' => Cliente::where('id', $request->id)->with('user')->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $dados = array(
            'name' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        );
        if($request->senha == ''){

        }else {
            $dados['password'] = \Hash::make($request->senha);
        }

        User::where('id', $request->id)->update($dados);

        return redirect()->route('clientesget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        Cliente::where('id', $request->id)->delete();
        User::where('id', $request->id)->delete();

        return redirect()->route('clientesget');
    }
}
