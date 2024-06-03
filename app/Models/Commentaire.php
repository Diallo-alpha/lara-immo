<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_publication',
        'description',
        'bien_id',
        'utilisateur_id',
    ];

    public function bien ()
        {
            return $this->belongsTo(Bien::class);
        }

    public function utilisateur()
        {
            return $this->belongsTo(Utilisateur::class);
        }
}