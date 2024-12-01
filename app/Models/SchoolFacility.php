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

    protected $casts = [
        'images' => 'array'
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
                $newPictures = $schoolFacility->images;

                $removedPictures = array_diff($oldPictures ?? [], $newPictures ?? []);

                foreach ($removedPictures as $filePath) {
                    Storage::disk('public')->delete($filePath);
                }
            }
        });
    }

}

