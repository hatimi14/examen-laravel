<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany, HasMany, HasOne};

class Mensaje extends Model
{
    protected $table = 'mensajes';

    protected $fillable = ['remitente_id', 'destinatario_id', 'asunto', 'mensaje', 'leido'];
    public function remitente(): BelongsTo
    {
        return $this->belongsTo(User::class, 'remitente_id');
    }

    public function destinatario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'destinatario_id');
    }
}
