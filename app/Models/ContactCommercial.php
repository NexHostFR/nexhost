<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCommercial extends Model
{
    use HasFactory;

    protected $fillable = [
        'entite',
        'nombre_employes',
        'nom',
        'prenom',
        'email',
        'telephone',
        'fonction',
        'nom_organisation',
        'country',
        'city',
        'category_product',
        'langue',
        'source_info',
        'demande_projet'
    ];
}
