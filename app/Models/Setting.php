<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'meta_title', 'meta_description', 'meta_keywords', 'address', 'working_hours',
        'email','phone', 'logo', 'footer_logo', 'favicon',
        'telegram','instagram','facebook','twitter','youtube','vk','ok',
        'map_script','google_metrics','yandex_metrics'
    ];

    public static array $baseTables = ['users', 'banners', 'certificates', 'menus', 'posts', 'pages', 'settings'];

    protected $hidden = ['id'];

    public $timestamps = false;

    const CACHE_KEY = 'settings';

    public array $translatable = ['meta_title', 'meta_description','meta_keywords','address','working_hours'];

    public array $contacts = ['email','phone','telegram','instagram','facebook','twitter','youtube','vk','ok'];

    public array $files = ['logo', 'footer_logo', 'favicon'];

    public array $scripts = ['map_script','google_metrics','yandex_metrics'];

    public function getTranslatableFields(): array
    {
        return $this->translatable;
    }

    public static function getSettings(): Setting
    {
        return Cache::rememberForever(self::CACHE_KEY, function () {
            return self::first();
        }) ?? new Setting();
    }
}
