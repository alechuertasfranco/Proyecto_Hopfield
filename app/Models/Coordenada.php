<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenada extends Model
{
    protected $table='coordenada';
    protected $primaryKey='idCoordernada';
    protected $fillable=['ejex','ejey','idCaracter'];
    public $timestamps=false;

    public function caracter()
    {
        return $this->hasOne('App\Models\Caracter','idCaracter','idCaracter');
    }
}
