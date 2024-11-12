<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'published_at',
        'user_id',
    ];
    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function getFormattedDate()
    {
        return Carbon::parse($this->published_at)->format('d M Y');
        /*tambahkan , h:i A ke dalam format jika ingin ditampilkan waktunya */
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 30);
    }
}
