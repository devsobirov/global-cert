<?php

namespace App\Models;

use App\Contracts\Linkable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Translatable\HasTranslations;

class Block extends Model implements Linkable
{
    use HasFactory, HasTranslations;

    protected $guarded = false;

    public $timestamps = false;

    public $translatable = ['title', 'description'];

    const TYPE_FEATURE = 'feature';
    const TYPE_SERVICE = 'service';
    const TYPE_COUNTER = 'counter';

    public static $types = [self::TYPE_FEATURE, self::TYPE_SERVICE, self::TYPE_COUNTER];

    public function getUrl(): string
    {
        return $this->url
            ? LaravelLocalization::localizeUrl(route('web.page', $this->getRouteParams()))
            : '#';
    }

    public function getRouteParams(): array
    {
        return ['page' => $this->url];
    }
}
