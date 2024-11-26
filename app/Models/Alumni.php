<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alumni extends Model
{
    protected $fillable = [
        'name',
        'photo'
    ];

    public function alumni_years():BelongsToMany
    {
        return $this->belongsToMany(AlumniYear::class);
    }
}
