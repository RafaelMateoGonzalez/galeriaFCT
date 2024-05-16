<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{



    use HasFactory;

    /**
     * Los atributos que son asignables.
     *
     * @var array
     */
    protected $fillable = [
        'evento_id',
        'user_id',
        'codigo',
        'fecha_compra',
        'cantidad'
    ];

    /**
     * Obtiene el evento asociado con la entrada.
     */
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    /**
     * Obtiene el usuario que compró la entrada.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
