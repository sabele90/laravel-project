<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

//Eloquent , is the ORM of LARAVEL , object-relational mapper , (permite mapear objetos y métodos en lugar de consultas en sql directas)
//estos modelos interactuan con la tabla 
class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
    ];
    public function user() : BelongsTo
    {
    return $this->belongsTo(User::class);
    }
}
