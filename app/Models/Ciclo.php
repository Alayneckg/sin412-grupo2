<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ciclo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tempo_pausa', 'tempo_foco', 'label'
    ];
}
