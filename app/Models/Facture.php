<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $primaryKey = 'id_stripe';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        "id_stripe",
        "id_user",
        "id_commande",
        "prix",
        "status",
        "url_visualisation",
        "url_pdf"
    ];
}
