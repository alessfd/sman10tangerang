<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AlumniYear extends Model
{
    use HasFactory;

    protected $fillable = ['year'];

    public function alumnis(): HasMany
    {
        return $this->hasMany(Alumni::class);
    }


    protected static function booted()
    {
        static::deleting(function ($parent) {
            $parent->alumnis()->delete();
        });
    }

    public function gallery_events(): BelongsTo
    {
        return $this->belongsTo(GalleryEvent::class);
    }


    private $year;

    public function getYear() {
        return $this->attributes['year'];
    }
}
