<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;

    // Permitir asignación masiva en todos los campos
    protected $guarded = [];

    /**
     * Relación: una nota pertenece a un estudiante
     */
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}