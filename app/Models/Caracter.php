<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracter extends Model
{
    protected $table='caracter';
    protected $primaryKey='idCaracter';
    protected $fillable=['caracter','idTipo'];
    public $timestamps=false;

    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo','idTipo','idTipo');
    }

    public function coordenadas()
    {
        return  $this->hasMany(Tipo::class,'idCaracter','idCaracter');
    }
}
