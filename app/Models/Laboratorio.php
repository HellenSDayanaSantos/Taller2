<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = 'laboratorios';

    protected $fillable = [
    	'nombre',
    	'datos'
    ];

    protected $appends = ['nombre_id', 'listado_farmacos'];

    protected $casts = ['datos' => 'array'];

    protected $hidden = ['created_at','updated_at'];

    public function farmacos()
    {
    	return $this->hasMany('App\Models\Farmaco');
    }

    public function getNombreIdAttribute()
    {
        return "{$this->nombre} {$this->id}";
    }

    public function getListadoFarmacosAttribute()
    {
    	return $this->farmacos;
    }

    public function setNombreAttribute($value){
        $this->attributes['nombre'] = ucfirst($value);
    }
}
