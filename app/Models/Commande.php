<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        "user_id",
        "categorie",
        "produit",
        "prix",
        "duration",
        "status",
        "finish_at"
    ];
}
