<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Embarcacion extends Model {
    use HasFactory;

    protected $table = 'embarcaciones';
    protected $primaryKey = 'id_embarcacion';

    protected $fillable = [
        'nombre',
        'rey',
        'estado'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function movimientos() {
        return $this->hasMany(Movimiento::class);
    }
}
