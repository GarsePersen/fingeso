<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compromiso_actividad extends Model
{
    protected $fillable = ['descripcion','id_usuario' ,'tipo_actividad','semestre', 'hora_semana', 'hora_semestre',];
    protected $table = 'compromisoActividad';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
