<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
    ];

    protected $casts = [
        'price' => 'float',
        'status' => Status::class,
    ];

    public function getStatusLabelAttribute(): string
    {
        return ($this->status instanceof Status) ? $this->status->label() : (Status::from($this->status))->label();
    }
}
