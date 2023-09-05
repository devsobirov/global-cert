<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = false;

    public array $translatable = ['title', 'content'];

    public function scopeSearch(Builder $query, $search = '')
    {
        if (!empty($search)) {
            $query->where('title', 'like', "%$search%");
        }
    }

    public static function getRandomCourses(?int $exceptId = null): Collection
    {
        $items = self::select(['id', 'title', 'image']);

        if (is_numeric($exceptId)) {
            $items->whereNot('id', $exceptId);
        }

        return $items->inRandomOrder()->limit(8)->get();
    }
}
