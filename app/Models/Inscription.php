<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_prenom',
        'entreprise',
        'fonction',
        'destinations_choisies',
        'telephone',
        'whatsapp',
        'email',
    ];

    protected $casts = [
        'destinations_choisies' => 'array',
    ];
}