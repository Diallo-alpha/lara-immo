<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe',
        'role',
    ];
    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }

    public function utilisateurs(): HasMany
    {
        return $this->hasMany(Utilisateur::class);
    }
    use HasFactory;
}
