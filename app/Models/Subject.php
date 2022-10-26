<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'hourly_intensity'
        //Añada aquí el nombre de la nueva columna que haya creado para mejorar el módulo
    ];

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
