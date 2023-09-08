<?php

namespace App\Models;

use App\Contracts\Linkable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

class Menu extends Model implements Linkable
{
    use HasFactory, HasTranslations;

    protected $guarded = false;
    protected $casts = ['order' => 'integer', 'show_in_footer' => 'boolean'];

    public array $translatable = ['title'];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function subMenus(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function subPages(): HasMany
    {
        return $this->hasMany(Page::class, 'menu_id', 'id');
    }

    public function page(): HasOne
    {
        return $this->hasOne(Page::class, 'slug', 'url');
    }

    #[ArrayShape(['page' => "mixed"])]
    public function getRouteParams(): array
    {
        return [
            'page' => $this->url
        ];
    }

    public function getUrl(): string
    {
        return $this->url
            ? route('web.page', $this->getRouteParams())
            : '#';
    }

    public static function getParentsForList() : Collection
    {
        return self::select('id', 'title')->whereNull('url')->orderBy('order')->get();
    }
}
