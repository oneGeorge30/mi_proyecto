<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona'; // Tu tabla exacta
    public $timestamps = false;   // Opcional, si tu tabla no tiene created_at/updated_at
}
