<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $table='contrat';

    protected $fillable=
    [
        'libelle',
        'dateremboursement',
        'amount'
    ];

    public function inscrit()
    {
        return $this->belongsTo(Inscrit::class);
    }
}
