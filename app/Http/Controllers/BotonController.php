<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boton;
class BotonController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Boton::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      $unidades = \DB::table('unidads')->select('unidad','id')->get();
      return view('bien.index', compact('datos', 'unidades'));
    }
  }

  public function store(Request $request){
    $dato = new Boton;
    $request['user_id'] = \Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Boton');
  }

  public function show($id){
    $datos = Boton::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Boton::find($id);
    $request['user_id'] = \Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Boton');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Boton::find($id);
      $dato->delete();
      return "Boton Eliminado";
    }else{
      return redirect('/');
    }
  }

}
