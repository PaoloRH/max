<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];

    public function comentarios() {

        return $this->hasMany(Comentario::class);
    }
}