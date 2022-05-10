<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FindUserController extends Controller
{
    public function index()
    {
        // return dd($processing[2]->sso_id . ' ' . substr($processing[2]->sso_id, 1, 1));
        // return dd($processed);
        return view('finduser', [
            'title' => 'Igracious | Find User',
            'users' => User::all(),
        ]);
    }
}
