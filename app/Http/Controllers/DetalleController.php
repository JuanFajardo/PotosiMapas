<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle;
class DetalleController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = \DB::table('detalles')->join('botons', 'detalles.id_boton', '=', 'botons.id')
                                   ->select('detalles.*', 'botons.boton')->get();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('detalle.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Detalle;


    $request['departamento'] = '';
    $request['provincia'] = '';
    $request['distrito'] = '';
    $request['zona'] = '';
    $request['superficie_construida'] = '';
    $request['superficie_terreno'] = '';
    $request['monto_total'] = '';
    $request['monto_upre'] = '';
    $request['monto_gamp'] = '';
    $request['estado'] = '';
    $request['plazo'] = '';
    $request['beneficiario_estudiante'] = '';

    $request['user_id'] = 1; //\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Detalle');
  }

  public function show($id){
    $datos = Detalle::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Detalle::find($id);

        $request['departamento'] = '';
        $request['provincia'] = '';
        $request['distrito'] = '';
        $request['zona'] = '';
        $request['superficie_construida'] = '';
        $request['superficie_terreno'] = '';
        $request['monto_total'] = '';
        $request['monto_upre'] = '';
        $request['monto_gamp'] = '';
        $request['estado'] = '';
        $request['plazo'] = '';
        $request['beneficiario_estudiante'] = '';
    $request['user_id'] = 1; //\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Detalle');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Detalle::find($id);
      $dato->delete();
      return "Detalle Eliminado";
    }else{
      return redirect('/');
    }
  }

}
