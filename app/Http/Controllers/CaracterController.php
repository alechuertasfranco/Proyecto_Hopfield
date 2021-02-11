<?php

namespace App\Http\Controllers;

use App\Models\Caracter;
use App\Models\Coordenada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class CaracterController extends Controller
{

    public function index()
    {
    }

    public function listCaracter(){
        return Caracter::get();
    }

    public function listCaracteres(){
        $caracteres = DB::table('caracter')
            ->join('coordenada', 'caracter.idCaracter', '=', 'coordenada.idCaracter')
            ->select('caracter.idCaracter', 'caracter.caracter', DB::raw('COUNT(coordenada.idCoordenada) as coordenadas'))
            ->groupby('caracter.idCaracter', 'caracter.caracter')
            ->get();
        $respuesta = array();
        foreach ($caracteres as $caracter) {
            $coordenadas = DB::table('caracter')
                    ->join('coordenada', 'caracter.idCaracter', '=', 'coordenada.idCaracter')
                    ->select('coordenada.ejex','coordenada.ejey')
                    ->where('caracter.idCaracter', $caracter->idCaracter)
                    ->get();
            array_push(
                $respuesta,
                array(
                    $caracter->caracter,
                    $caracter->coordenadas,
                    $coordenadas
                )
            );
        }

        // Log::channel('stderr')->info($respuesta);

        return $respuesta;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $caracter    = $request->caracter;
        $IdTipo      = $request->IdTipo;
        $vector = json_decode($_POST['vector']);

        Log::Channel('stderr')->info($vector);
        $caracteres = Caracter::where('caracter','=',$caracter)->where('idTipo','=',$IdTipo)->get();

        if (count($caracteres)>0){
            return "Caracter ya registrado";
        }
        else {
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
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
