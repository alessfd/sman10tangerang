<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    use HasFactory;
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
        'misi' => 'array'
    ];
}
