<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Employee extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = false;

    protected $casts = ['status' => 'boolean', 'order' => 'integer'];

    public $timestamps = false;

    public $translatable = ['name', 'position'];

    const BASE_IMAGE_PATH = 'assets/images/employees';
}
