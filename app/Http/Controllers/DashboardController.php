<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Igracious | User\'s Dashboard',
            // 'posts' => BlogPosts::all()
            'posts' => BlogPosts::with(['user', 'category'])->orderBy('updated_at', 'desc')->limit(6)->get()
        ]);
    }
}
