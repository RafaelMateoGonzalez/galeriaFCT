<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'titulo', 'descripcion', 'fecha_evento', 'precio_entrada', 'foto'];


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


    public function entradas()
    {
        return $this->hasMany(Entrada::class, 'evento_id');
    }
}
