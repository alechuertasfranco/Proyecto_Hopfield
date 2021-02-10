<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table='tipo';
    protected $primaryKey='idTipo';
    protected $fillable=['tipo'];
    public $timestamps=false;

    public function caracteres()
    {
        return  $this->hasMany(Caracter::class,'idTipo','idTipo');
    }
}
