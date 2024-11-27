<?php

namespace App\Models;

use Illuminate\Container\Attributes\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GalleryEvent extends Model
{

    protected $fillable = [
        'images',
        'description',
        'event'
    ];

    protected $casts = [
        'images' => 'array'
    ];

    public function alumni_years():BelongsToMany
    {
        return $this->belongsToMany(AlumniYear::class);
    }
}
