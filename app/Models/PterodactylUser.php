<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PterodactylUser extends Model
{
    protected $fillable = [
        "id_ptero",
        "email",
        "username",
        "id_user",
    ];
}
