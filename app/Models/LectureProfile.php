<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class LectureProfile extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'gender',
        'dob',
        'jabatan',
        'photo',
    ];

    /**
     * Boot the model and add event listeners.
     */
    protected static function booted()
    {
        static::deleting(function ($lectureProfile) {
            if ($lectureProfile->photo) {
                Storage::disk('public')->delete($lectureProfile->photo);
            }
        });


        static::updating(function ($lectureProfile) {
            if ($lectureProfile->isDirty('photo')) {
                $oldPhoto = $lectureProfile->getOriginal('photo');
                if ($oldPhoto) {
                    Storage::disk('public')->delete($oldPhoto);
                }
            }
        });
    }
}

