<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
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

    protected static function booted()
    {
        static::deleting(function ($galleryEvent) {
            if ($galleryEvent->images) {
                Storage::disk('public')->delete($galleryEvent->images);
            }
        });


        static::updating(function ($galleryEvent) {

            if ($galleryEvent->isDirty('images')) {
                $oldPictures = $galleryEvent->getOriginal('images');
                $newPictures = $galleryEvent->images;

                $removedPictures = array_diff($oldPictures ?? [], $newPictures ?? []);

                foreach ($removedPictures as $filePath) {
                    Storage::disk('public')->delete($filePath);
                }
            }
        });
    }



    public function alumni_years():BelongsToMany
    {
        return $this->belongsToMany(AlumniYear::class);
    }
}
