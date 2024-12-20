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

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::deleting(function ($post) {
            if ($post->thumbnail) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            if($post -> body){
                $post->deleteAttachedImages($post->body);
            }
        });


        static::updating(function ($post) {
            if ($post->isDirty('thumbnail')) {
                $oldthumbnail = $post->getOriginal('thumbnail');
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
        return $this->belongsToMany(Category::class, 'category_post');
    }

    public function getFormattedDate()
    {
        return Carbon::parse($this->published_at)->translatedFormat('l, j F Y - H:i');
        /*tambahkan , h:i A ke dalam format jika ingin ditampilkan waktunya */
    }

    public function getSimpleFormattedDate()
    {
        return Carbon::parse($this->published_at)->translatedFormat('j F Y');
        /*tambahkan , h:i A ke dalam format jika ingin ditampilkan waktunya */
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 30);
    }

    public function deleteAttachedImages($htmlContent, $newContent = null)
    {
        // Pastikan kedua konten valid
        $htmlContent = $htmlContent ?? '';
        $newContent = $newContent ?? '';

        $matches = [];
        $newmatches = [];

        // Ekstraksi URL dari konten HTML
        preg_match_all('/src=["\'](.*?)["\']/', $htmlContent, $matches);
        preg_match_all('/src=["\'](.*?)["\']/', $newContent, $newmatches);

        // Tentukan gambar yang akan dihapus (ada di konten lama, tapi tidak di konten baru)
        $removedPictures = array_diff($matches[1] ?? [], $newmatches[1] ?? []);

        foreach ($removedPictures as $imagePath) {
            // Ubah URL ke relative path
            $relativePath = str_replace('/storage', '', parse_url($imagePath, PHP_URL_PATH));

            // Hapus file dari disk
            if ($relativePath) {
                Storage::disk('public')->delete($relativePath);
            }
        }
    }
}
