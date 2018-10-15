<?php

namespace App\Http\Controllers;

use App\User;
use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fornecedores.create');
    }

    public function list() {
        return view('fornecedores.index', ['fornecedores' => Fornecedor::with('user')->get()]);
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

        $fornecedor = new Fornecedor;
        $fornecedor->id = $user->id;

        $fornecedor->save();

        return redirect()->route('fornecedoresget');
        
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
        return view('fornecedores.edit', ['fornecedor' => Fornecedor::where('id', $request->id)->with('user')->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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

        return redirect()->route('fornecedoresget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Fornecedor::where('id', $request->id)->delete();
        User::where('id', $request->id)->delete();

        return redirect()->route('fornecedoresget');
    }
}
