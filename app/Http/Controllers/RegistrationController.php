<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\School;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class RegistrationController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('registration', [
            'title' => 'Registration',
            'schools' => $schools,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
            'sso_id' => 'required|integer',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        // dump('Mantap Boss');
        // dump($request) . self::storeDetails($request->request->all());
        // dump($request);
        // dump($request);
        // dd($request->request->all());
        User::create($validatedData) . self::storeDetails($request->request->all());
        // dd($validatedData);

        // return $request()->all();
        // return $request;
        return redirect('/registration')->with('success', 'User' . $validatedData['name'] . 'has been added!!');
    }

    private function storeDetails($data)
    {
        // dd($data);
        $user_id = User::firstWhere('sso_id', $data['sso_id'])->id;
        UserDetail::insert([
            'user_id' => $user_id,
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'address' => $data['address'],
            'cityadd' => $data['cityadd'],
            'provadd' => $data['provadd'],
            'countryadd' => $data['countryadd'],
            'postal' => $data['postal'],
            'phone' => $data['phone'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // dump('User ID: ' . $user_id);
        // dump('The SSO' . $data['sso_id']);
        // dump(User::firstWhere('sso_id', '1114224795')->id);
    }

    public function requestMajor($id)
    {
        $majors = Major::where('school_id', $id)->get();
        // dd(Major::where('school_id', $id)->get());

        return response()->json($majors);
    }

    public function requestSSO($id)
    {
        // dump($id);
        $toSearch = $id * 10000;
        // dump($toSearch);
        $latest = User::whereBetween('sso_id', [$toSearch, $toSearch + 9999])->get()->last();
        // dump($latest);
        $res = ($latest) ? $latest['sso_id'] % $toSearch : 0;
        // dump($res);
        // dump(response()->json($res));
        return response()->json($res);
    }

    public function massStore(Request $request)
    {
        # code...
    }
}
