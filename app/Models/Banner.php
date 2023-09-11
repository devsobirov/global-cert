<?php

namespace App\Models;

use App\Contracts\Linkable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Translatable\HasTranslations;

class Banner extends Model implements Linkable
{
    use HasFactory, HasTranslations;

    const BASE_IMG_DIR = 'assets/images/slider';

    protected $guarded = false;

    protected $casts = ['is_external_link' => 'boolean'];

    public $timestamps = false;

    public array $translatable = ['intro', 'title', 'btn_label'];

    public function getRouteParams(): array
    {
        return ['page' => $this->btn_link];
    }

    public function getUrl(): string
    {
        if ($this->btn_link) {
            return $this->is_external_link
                ? $this->btn_link
                : LaravelLocalization::localizeUrl(route('web.page', $this->getRouteParams()));
        }
        return '#';
    }
}
