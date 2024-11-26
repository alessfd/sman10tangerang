<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlumniYear extends Model
{
    protected $fillable = ['year'];

    public function alumnis()
    {
        return $this->belongsToMany(Alumni::class);
    }

}
