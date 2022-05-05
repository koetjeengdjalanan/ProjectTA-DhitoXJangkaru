<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
