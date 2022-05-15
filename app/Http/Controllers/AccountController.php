<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('user', [
            'title' => 'Igracious Account Page'
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if ($request['newPass'] !== $request['newRepeat']) {
            return redirect('/user')->withErrors('New Passord Not Match!');
        }
        if (Hash::check($request['password'], $user->password)) {
            $validated = $request->validate([
                'newPass' => 'required|min:6',
            ]);
            // $user->forceFill
            $user->update([
                'password' => Hash::make($validated['newPass'])
            ]);

            // return $validated['newRepeat'];
            return redirect('/user')->with('success', 'Password Changed!');
        }

        return redirect('/user')->withErrors('Incorrect Current Password');
    }
}
