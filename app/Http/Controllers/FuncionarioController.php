<?php

namespace App\Http\Controllers;

use App\User;
use App\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('funcionarios.create');
    }

    public function list() {
        return view('funcionarios.index', ['funcionarios' => Funcionario::with('user')->get()]);
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

        $funcionario = new Funcionario;
        $funcionario->id = $user->id;
        $funcionario->cpf = $request->cpf;
        $funcionario->salario = $request->salario;

        $funcionario->save();

        return redirect()->route('funcionariosget');
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
        return view('funcionarios.edit', ['funcionario' => Funcionario::where('id', $request->id)->with('user')->first()]);
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

        Funcionario::where('id', $request->id)->update(['cpf' => $request->cpf, 'salario' => $request->salario]);

        return redirect()->route('funcionariosget');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Funcionario::where('id', $request->id)->delete();
        User::where('id', $request->id)->delete();

        return redirect()->route('funcionariosget');
    }
}
