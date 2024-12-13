<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AlumniYear extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'photo'];

    public function alumnis(): HasMany
    {
        return $this->hasMany(Alumni::class);
    }


    protected static function booted()
    {
        static::deleting(function ($parent) {
            $parent->alumnis()->delete();
        });

        static::deleting(function ($alumni) {
            if ($alumni->photo) {
                Storage::disk('public')->delete($alumni->photo);
            }
        });


        static::updating(function ($alumni) {
            if ($alumni->isDirty('photo')) {
                $oldphoto = $alumni->getOriginal('photo');
                if ($oldphoto) {
                    Storage::disk('public')->delete($oldphoto);
                }
            }
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
