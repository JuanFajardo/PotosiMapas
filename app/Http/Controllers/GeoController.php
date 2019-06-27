<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geo;
class GeoController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = \DB::table('geos')->join('detalles', 'geos.id_detalle', '=', 'detalles.id')
                               ->select('geos.*', 'detalles.titulo')->get();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('geo.index', compact('datos'));
    }
  }

  public function ver($id){
    $dato = \App\Detalle::find($id);
    return view('geo.guardar', compact('dato'));
  }

  public function verMapa($id){
    $datos = \DB::table('botons')->join('detalles', 'botons.id', '=', 'detalles.id_boton')
                                 ->join('geos', 'detalles.id', '=', 'geos.id_detalle')
                                  ->where('botons.id', '=', $id)
                                  ->select('botons.*', 'detalles.titulo', 'detalles.distrito', 'detalles.zona', 'detalles.distrito', 'detalles.monto_total', 'detalles.superficie_construida', 'detalles.imagen as foto', 'geos.*')
                                  ->get();
    return view('mapa.index', compact('datos'));

  }

  public function guardar(Request $request){
    $request['user_id'] = 1; //\Auth::user()->id;
    $dato = new Geo;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Geo');
  }


  public function show($id){
    $datos = Geo::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Geo::find($id);
    $request['user_id'] = \Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Geo');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Geo::find($id);
      $dato->delete();
      return "Geo Eliminado";
    }else{
      return redirect('/');
    }
  }

  public function mostrarIndex($id){
    $dato = \App\Boton::find($id);
    return view('mapa.index', compact('dato'));
  }

}
