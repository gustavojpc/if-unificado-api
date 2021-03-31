<?php

namespace App\Http\Controllers;

use App\Models\Artefatos;
use App\Models\ArtefatosTitulos;
use App\Models\ArtefatosTitulosSubtitulos;
use PDF;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtefatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return Artefatos::create([
            'nome' => $request->nome,
            'modelo_padrao' => $request->modelo_padrao,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function fillArtefatos() {
        return Artefatos::get();
    }
    public function getArtefatosById(Request $request) {
        $query = Artefatos::query();
        $query->with(['artefatosTitulos.artefatosTitulosSubtitulos']);
        $query->with(['templates']);
        $query->where('id', $request->id);
        return $query->first();
    }

    public function generatePDF() {
        $query = Artefatos::query();
        $query->with(['artefatosTitulos.artefatosTitulosSubtitulos']);
        $query->with(['templates']);
        $query->where('id', 3);
        $artefato = $query->first();
        $pdf = PDF::loadView('PDF.artefatopdf',compact('artefato'));
        return $pdf ->setPaper('a4')->stream('PedidoAPJ.pdf');
    }

    public function udpateArtefatoTitulosAndSubtitulos(Request $request) {
        try {
            DB::beginTransaction();
                foreach($request->artefatos_titulos as $item) {
                    $artefatoTitulo = ArtefatosTitulos::find($item['id']);
                    $artefatoTitulo->descricao = $item['descricao'];
                    $artefatoTitulo->save();
                    // dd()
                    foreach($item['artefatos_titulos_subtitulos'] as $itemSubtitulo) {
                        $artefatoTituloSubtitulo = ArtefatosTitulosSubtitulos::find($itemSubtitulo['id']);
                        $artefatoTituloSubtitulo->descricao = $item['descricao'];
                        $artefatoTituloSubtitulo->save();
                    }

                }
            DB::commit();
            return response()->json(['status' => 'Updated'], 201);
        } catch(Exception $error) {
            dd($error);
            DB::rollback();
        };
    }
}
