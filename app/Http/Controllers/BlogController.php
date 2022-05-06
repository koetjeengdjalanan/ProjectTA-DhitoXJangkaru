<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function singlePost($uuid)
    {
        return view('blog', [
            'title' => 'Igracious | Campus\'s News',
            'post' => BlogPosts::firstWhere('uuid', $uuid)
        ]);
    }
}
