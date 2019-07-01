<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boton;
class BotonController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Boton::all();
    $menus = \App\Menu::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('boton.index', compact('datos', 'menus'));
    }
  }

  public function store(Request $request){
    $dato = new Boton;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Boton');
  }

  public function show($id){
    $datos = Boton::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $request['user_id'] = 1;//\Auth::user()->id;
    if( isset($request->imagen)  ){
      $dato = Boton::find($id);
      $dato->fill($request->all());
      $dato->save();
    }else{
      $dato = Boton::find($id);
      $dato->boton  = $request->boton;
      $dato->icono  = $request->icono;
      $dato->tipo   = $request->tipo;
      //$dato->user_id= $request->user_id;
      $dato->save();
    }

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
