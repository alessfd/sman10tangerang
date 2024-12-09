<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SchoolFacility extends Model
{
    protected $fillable = [
        'name',
        'images',
        'description',
        'location',
        'capacity',
        'status',
    ];


    protected static function booted()
    {
        static::deleting(function ($schoolFacility) {
            if ($schoolFacility->images) {
                Storage::disk('public')->delete($schoolFacility->images);
            }
        });


        static::updating(function ($schoolFacility) {
            if ($schoolFacility->isDirty('images')) {
                $oldPictures = $schoolFacility->getOriginal('images');
                if ($oldPictures) {
                    Storage::disk('public')->delete($oldPictures);
                }
            }
        });
    }

}

