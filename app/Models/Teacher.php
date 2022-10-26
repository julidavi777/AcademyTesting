<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'college_degree',
        'age',
        'contract_date',
        'image',
        'identify_document',
        'course-id'
        //Añada aquí el nombre de la nueva columna que haya creado para mejorar el módulo
    ];

    use HasFactory;

    public function subjects(){
        return $this->belongsTo(Subject::class);
    }

}
