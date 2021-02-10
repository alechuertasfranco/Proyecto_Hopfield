<?php

namespace App\Http\Controllers;

use App\Models\Caracter;
use App\Models\Coordenada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class CaracterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function listCaracter(){
        return Caracter::get();
    }
    public function listCaracteres(){
        $caracter = DB::table('caracter')
            ->join('coordenada', 'caracter.idCaracter', '=', 'coordenada.idCaracter')
            ->select('caracter.caracter','coordenada.ejex','coordenada.ejey')
            ->get();

        Log::channel('stderr')->info($caracter);

        return $caracter;
        /* if($request->ajax()){
            Genre::create($request->all());
            return response()->json([
                "mensaje" => "creado"
            ]);
        } */
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
        $caracter    = $request->caracter;
        $IdTipo      = $request->IdTipo;
        $vector = json_decode($_POST['vector']);

        $caracteres = Caracter::where('caracter','=',$caracter)->where('idTipo','=',$IdTipo)->get();

        if (count($caracteres)>0){
            return "Caracter ya registrado";
        }
        else
            $carac = new Caracter();
            $carac->caracter = $caracter;
            $carac->idTipo = $IdTipo;
            $carac->save();

            $LastIdCaracter = Caracter::latest('idCaracter')->first();

            for($i=0; $i<count($vector); $i++)
            {
                $coor = new Coordenada;
                $coor->idCaracter = $LastIdCaracter->idCaracter;
                $coor->ejex = $vector[$i]->x;
                $coor->ejey = $vector[$i]->y;
                $coor->save();
            }
          return $vector;
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
}
