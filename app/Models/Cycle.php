<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;

    protected $table='cycle';

    protected $fillable=
    [
        'libelle',
        'droit'
    ];

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
}
