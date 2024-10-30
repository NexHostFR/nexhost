<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'accept_consent'];

    public function saveNewsletter($request) {
        $this->email = $request->email;
        $this->accept_consent = $request->accept_consent;
        $this->save();
    }
}
