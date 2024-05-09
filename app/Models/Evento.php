<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $fillable = ['user_id', 'titulo', 'descripcion', 'fecha_evento', 'precio_entrada', 'foto'];
}
