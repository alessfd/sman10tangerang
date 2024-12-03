<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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

    protected static function booted()
    {
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


}
