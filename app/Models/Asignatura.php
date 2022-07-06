<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function carrera()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
