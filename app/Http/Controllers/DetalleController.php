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
    //return $request->all();
    $request['user_id'] = 1; //\Auth::user()->id;
    if( isset($request->imagen)  ){
      $dato = Detalle::find($id);
      $dato->fill( $request->all() );
      $dato->save();
    }else{
      $dato = Detalle::find($id);
      $dato->titulo     = $request->titulo;
      $dato->descripcion= $request->descripcion;
      $dato->color      = $request->color;
      $dato->estado     = $request->estado;
      $dato->id_boton   = $request->id_boton;
      $dato->save();
    }
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
