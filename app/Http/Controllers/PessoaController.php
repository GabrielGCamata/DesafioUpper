<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        //return response()->json(['message'=> 'Registro inserido com sucesso', 'data' => Pessoa::all()], 200);
        return view('teste', ['pessoas' => $pessoas]);
    }

    public function getall()
    {
        $pessoas = Pessoa::all();
        return response()->json(['message'=> 'sucesso', 'data' => $pessoas], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaRequest $request)
    {

        try {
            $validated = $request->validated();

            if(Pessoa::where('cpf', $request->cpf)->first() != null )
            {
                return response()->json(['message'=> 'Cpf já cadastrado'], 400);
            }

            if(Pessoa::where('email', $request->email)->first() != null )
            {
                return response()->json(['message'=> 'Email já cadastrado'], 400);
            }

            Pessoa::create([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'data_nascimento' => $request->data_nascimento,
                'email' => $request->email,
                'estado' => $request->estado,
                'cidade' => $request->cidade,
                'logradouro' => $request->logradouro,
            ]);

            return response()->json(['message'=> 'Registro inserido com sucesso'], 200);
        } catch (Throwable $th) {

            return response()->json(['message'=> 'Falha no sistema'], 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return response()->json(['message'=> 'Registro inserido com sucesso', 'data' => Pessoa::find($id)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaRequest $request, int $id)
    {
        $pessoa = Pessoa::find($id);

        if($pessoa == null)
        {
            return response()->json(['message'=> 'Registro não encontrado'], 404);
        }

        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->data_nascimento = $request->data_nascimento;
        $pessoa->email = $request->email;
        $pessoa->estado = $request->estado;
        $pessoa->cidade = $request->cidade;
        $pessoa->logradouro = $request->logradouro;

        $pessoa->update();

        return response()->json(204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {

        try {
            $pessoa = Pessoa::find($id);
            $pessoa->delete();

            return response()->json(['message' => 'Registro removido com sucesso'],200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Falha ao remover registro'], 400);
        }
    }
}
