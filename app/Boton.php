<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boton extends Model
{
    protected $table = 'botons';
    protected $fillable = [ 'id', 'boton', 'icono' ];

    public function setImagenAttribute($imagen){
      $this->attributes['imagen'] = md5(date('Y_m_d_H_i_s_')).'_'.$imagen->getClientOriginalName();
      $name = md5(date('Y_m_d_H_i_s_')).'_'.$imagen->getClientOriginalName();
      \Storage::disk('local')->put($name, \File::get($imagen));
    }
}
