<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany, HasMany, HasOne};

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = ['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'user_id'];

    public function tasks(): HasMany {
        return $this->hasMany(Task::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
