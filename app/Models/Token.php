<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    
    protected $guarded=[
        'created_at',
        'updated_at',
        // 'codigo',
        // 'fecha_creacion',
        // 'fecha_registro',
        // 'estado',
        // 'id_tutor',
        // 'id_hijo',
        'id',
    ];
}
