<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration',
        'image'
        //Añada aquí el nombre de las nuevas columnas que haya creado
    ];
    use HasFactory;

    //Relación uno a muchos
    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

}
