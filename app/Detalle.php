<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
  protected $table = 'detalles';
  protected $fillable = ['id', 'imagen', 'titulo', 'departamento', 'provincia', 'distrito', 'zona', 'superficie_construida',
      'superficie_terreno', 'monto_total', 'monto_upre', 'monto_gamp', 'estado', 'plazo',  'beneficiario_estudiante', 'descripcion', 'color', 'id_boton'];

  public function setImagenAttribute($imagen){
    $this->attributes['imagen'] = md5(date('Y_m_d_H_i_s_')).'_'.$imagen->getClientOriginalName();
    $name = md5(date('Y_m_d_H_i_s_')).'_'.$imagen->getClientOriginalName();
    \Storage::disk('local')->put($name, \File::get($imagen));
  }
}
