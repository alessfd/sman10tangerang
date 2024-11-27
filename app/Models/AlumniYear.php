<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AlumniYear extends Model
{
    protected $fillable = ['year'];

    public function alumnis(): BelongsToMany
    {
        return $this->belongsToMany(Alumni::class);
    }

    public function gallery_events(): BelongsToMany
    {
        return $this->belongsToMany(Alumni::class);
    }

}
