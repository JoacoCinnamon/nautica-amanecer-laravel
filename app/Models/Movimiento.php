<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_desde',
        'fecha_hasta'
    ];

    public function amarra()
    {
        $this->belongsTo(Amarra::class);
    }
    public function embarcacion()
    {
        $this->belongsTo(Embarcacion::class, 'id_embarcacion', 'id_embarcacion');
    }
}
