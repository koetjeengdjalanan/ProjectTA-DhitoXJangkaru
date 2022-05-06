<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' =>  $category->blogPosts->sortBy('updated_at')
        ]);
    }
}
