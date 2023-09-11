<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = false;

    public $timestamps = false;

    const BASE_IMAGE_PATH = 'assets/images/project';
}
