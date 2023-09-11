<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $casts = ['issue_date' => 'datetime', 'expiry_date' => 'datetime'];

    public $timestamps = false;

    public function scopeSearch(Builder $query, $search = '')
    {
        if (!empty($search)) $query->where('number', $search);
    }

    public function scopeByStatus(Builder $query, $status = '')
    {
        if ($status == 'expired') $query->whereDate('expiry_date', '<', now());
        if ($status == 'active') $query->whereDate('expiry_date', '>', now());
    }

    public function getStatus(): string
    {
        return $this->expiry_date->gte(now())
            ? 'Active'
            : 'Expired';
    }
}
