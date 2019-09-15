<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{
    protected $table = 'farmacos';

    protected $fillable = [
    	'nombre',
    	'laboratorio_id'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function laboratorio()
    {
    	return $this->belongsTo('App\Models\Laboratorio');
    }

    
}
