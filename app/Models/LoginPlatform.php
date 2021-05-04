<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginPlatform extends Model
{
    use HasFactory;

    const INGRESO = "Ingreso";
    const NOINGRESO = "No Ingreso";

    public function user() {
        return $this->belongsTo(User::class);
    }
}
