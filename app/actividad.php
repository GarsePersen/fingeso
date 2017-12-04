<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    protected $fillable = ['descripcion','id_compromiso' ,'tipo_actividad','semestre', 'hora_semana', 'hora_semestre',];
    protected $table = 'actividad';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
