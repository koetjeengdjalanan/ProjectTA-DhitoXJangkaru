<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'exceprt',
        'body',
        'published',
        'updated_at'
    ];
}
