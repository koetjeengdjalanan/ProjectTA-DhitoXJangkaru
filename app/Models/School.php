<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function major()
    {
        return $this->hasMany(Major::class);
    }
}
