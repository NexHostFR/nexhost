<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'accept_consent'];

    public function saveNewsletter(Request $request) {
        $this->email = $request->string('email')->trim();
        $this->accept_consent = $request->boolean('accept_consent');
        $this->save();
    }
}
