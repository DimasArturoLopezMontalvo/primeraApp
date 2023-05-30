<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $table = "eventos";

    protected $fillable = [
        'fechEvent',
        'nomEvent',
        'Suite',
        'NumColaborador',
        'NombreColaborador',
        'puesto',
        'pago',
        'pax',
        'asistencia',
        'observaciones',
    ];
    public $timestamps = false;
}