<?php

namespace App\Http\Controllers;

use App\Models\Iteracao;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request)
    {
        $projeto = Projeto::create([
            'nome' => $request->nome,
            'user_id' => $request->user_id,
            'descricao' => $request->descricao
        ]);
        Iteracao::createIteracao($projeto->id);
        $query = Projeto::query();
        $query->with('iteracoes.iteracoesFases.fases');
        $query->where('id', $projeto->id);

        return $query->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Retorna uma lista de projetos para preenchimento de um select
     *
     * @return \Illuminate\Http\Response
     */
    public function getProjetosList(Request $request)
    {
        $projetos = Projeto::select('id','nome')->where('user_id',  $request->id)->get();
        return $projetos;
    }

    /**
     * Retorna um projeto com base no ID
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getProjetoById(Request $request) {
        if($request->has('id')) {
            $query = Projeto::query();
            $query->with('iteracoes.iteracoesFases.fases');
            $query->where('id', $request->id);
            return $query->first();
        } else {

            return response()->json(['message' => trans('messages.error')], 500);
        }
    }
}
