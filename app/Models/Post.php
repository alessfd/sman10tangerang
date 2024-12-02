<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
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

    protected static function booted()
    {
        static::deleting(function ($post) {
            if ($post->thumbnail) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            if($post -> body){
                $post->deleteAttachedImages();
            }
        });


        static::updating(function ($post) {
            if ($post->isDirty('thumbnail')) {
                $oldthumbnail = $post->getOriginal('thumbnail');
                dump($oldthumbnail);
                if ($oldthumbnail) {
                    Storage::disk('public')->delete($oldthumbnail);
                }
            }

            if ($post->isDirty('body')) {
                $oldBody = $post->getOriginal('body');
                $post->deleteAttachedImages($oldBody, $post->body);
            }
        });
    }




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

    public function deleteAttachedImages($htmlContent, $newContent)
    {
        $htmlContent = $htmlContent;
        $newContent = $newContent;
        $newmatches = [];
        $matches = [];
        preg_match_all('/src=["\'](.*?)["\']/', $htmlContent, $matches);
        preg_match_all('/src=["\'](.*?)["\']/', $newContent, $newmatches);

        $removedPictures = array_diff($matches[1] ?? [], $newmatches[1] ?? []);
        if (!empty($removedPictures)) {
            foreach ($removedPictures as $imagePath) {
                $relativePath = str_replace('/storage', '', $imagePath);

                Storage::disk('public') -> delete($relativePath);
            }
        }
    }
}
