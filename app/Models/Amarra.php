<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amarra extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pasillo',
        'estado'
    ];

    protected const LIBRE = 0;
    protected const OCUPADA = 1;

    public function movimientos() {
        return $this->hasMany(Movimiento::class);
    }

    public static function next(int $id) {
        return Amarra::withTrashed()->where('id', $id + 1)->first();
    }
    public static function previous(int $id) {
        return Amarra::withTrashed()->where('id', $id - 1)->first();
    }

    public function estado() {
        return $this->estado === self::LIBRE
            ? 'Libre'
            : 'Ocupada';
    }
    public function borrado() {
        return is_null($this->deleted_at)
            ? 'Activa'
            : 'Baja';
    }
}
