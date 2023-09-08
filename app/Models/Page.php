<?php

namespace App\Models;

use App\Contracts\Linkable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

class Page extends Model implements Linkable
{
    use HasFactory, HasTranslations;

    const BASE_IMAGE_PATH = 'assets/images/posts';
    const DEFAULT_HEADER_IMAGE = 'assets/images/posts/header.jpg';

    protected $guarded = false;

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'slug', 'url');
    }

    public array $translatable = ['title', 'content', 'meta_title', 'meta_description'];

    #[ArrayShape(['page' => "mixed"])]
    public function getRouteParams(): array
    {
        return ['page' => $this->slug];
    }

    public function getUrl(): string
    {
        return $this->slug ? route('web.page', $this->getRouteParams()) : '#';
    }

    public function getHeaderImgUrl(): string
    {
        return asset($this->header_img ?? self::DEFAULT_HEADER_IMAGE);
    }
}
