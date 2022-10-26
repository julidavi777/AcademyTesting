<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
        //Añada aquí el nombre de la nueva columna que haya creado para mejorar el módulo

    ];

    //Relación uno a muchos
    public function departments(){
        return $this->hasMany(Department::class);
    }
}
