<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geo extends Model
{
  protected $table = 'geos';
  protected $fillable = ['id', 'latitud', 'longitud', 'id_detalle'];
}
