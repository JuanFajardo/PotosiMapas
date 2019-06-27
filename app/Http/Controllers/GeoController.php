<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geo;
class GeoController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Geo::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      $unidades = \DB::table('unidads')->select('unidad','id')->get();
      return view('geo.index', compact('datos', 'unidades'));
    }
  }

  public function store(Request $request){
    $dato = new Geo;
    $request['user_id'] = \Auth::user()->id;
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

}
