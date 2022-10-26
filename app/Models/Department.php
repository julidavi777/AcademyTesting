<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'country_id'
        //Añada aquí el nombre de la nueva columna que haya creado para mejorar el módulo
    ];

    public function countries(){
        return $this->belongsTo(Country::class);
    }

    public function municipalities(){
        return $this->hasMany(Municipality::class);
    }
}
