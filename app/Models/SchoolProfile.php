<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    protected $fillable = [
        'visi',
        'misi',
        'name',
        'npsn',
        'address',
        'email',
        'phone_number',
        'description',
    ];

    protected $casts = [
        'visi' => 'array',
        'misi' => 'array'
    ];
}
