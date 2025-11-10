<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'semestre',
        'carrera_id',
    ];

    
    public function carrera(): BelongsTo
    {
        return $this->belongsTo(Carrera::class);
    }
}