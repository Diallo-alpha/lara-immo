<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{

    use HasFactory;

public function utilisateur(): BelongsTo
{
    return $this->belongsTo(Utilisateur::class);
}

public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
