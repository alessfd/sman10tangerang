<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'alumni_year_id'
    ];
    public function alumni_years(): BelongsTo
    {
        return $this->belongsTo(AlumniYear::class, 'alumni_year_id', 'id');
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
