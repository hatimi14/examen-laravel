<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany, HasMany, HasOne};

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['descripcion','completada', 'project_id'];

    public function proyecto(): BelongsTo {
        return $this->belongsTo(Project::class);
    }
}

