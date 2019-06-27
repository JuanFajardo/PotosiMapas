<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle;
class DetalleController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Detalle::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      $unidades = \DB::table('unidads')->select('unidad','id')->get();
      return view('detalle.index', compact('datos', 'unidades'));
    }
  }

  public function store(Request $request){
    $dato = new Detalle;
    $request['user_id'] = \Auth::user()->id;
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
    $request['user_id'] = \Auth::user()->id;
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
