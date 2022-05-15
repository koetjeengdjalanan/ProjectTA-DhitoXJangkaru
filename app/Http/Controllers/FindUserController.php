<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use function PHPUnit\Framework\isNull;

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

    public function delete(Request $request)
    {
        $user = User::find($request['user_id']);
        // dump($user);
        $userDetail = UserDetail::where('user_id', $request['user_id'])->first();
        // dump($userDetail);
        if ($userDetail) {
            $user->delete();
            $userDetail->delete();
            return redirect('/finduser')->with('success', 'User ' . $user->sso_id . " has been deleted");
            // $wtf = 'Delete Both';
        } else {
            $user->delete();
            // $wtf = 'no Details';
            return redirect('/finduser')->with('success', 'User ' . $user->sso_id . " has been deleted");
        }
        // return [$wtf, $user, $userDetail];
    }
}
