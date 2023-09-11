<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = false;
    protected $casts = ['views' => 'integer'];
    public array $translatable = ['title', 'content', 'excerpt'];

    public static function getLatestPosts(?int $limit = 8, null|int|array $exceptId = null): Collection
    {
        return self::select('id', 'title', 'image', 'views', 'created_at')
            ->except($exceptId)
            ->limit($limit)
            ->orderBy('id', 'desc')->get();
    }

    public function scopeExcept(Builder $query, null|int|array $ids)
    {
        $query->when(is_array($ids) && !empty($ids), function ($query) use ($ids) {
           $query->whereNotIn('id', $ids);
        });

        $query->when(is_numeric($ids), function ($query) use ($ids) {
            $query->whereNot('id', $ids);
        });
    }
}
