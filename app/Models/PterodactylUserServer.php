<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PterodactylUserServer extends Model
{
    protected $fillable = [
        "id_server",
        "id_user",
    ];
}
