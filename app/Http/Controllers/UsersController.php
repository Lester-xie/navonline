<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|min:2',
            'phone' => 'required|unique:users|regex:[^[1][358][0-9]{9}$]',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home', [$user]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:12',
            'intro' => 'max:60',
        ]);

        $user = User::findOrFail($id);
//        echo '<pre/>';
//        print_r($user);exit;

        //只能修改受保护的字段
        $user->update([
            'head_src' => $request->head_src,
            'name' => $request->name,
            'gender' => $request->gender,
            'intro' => $request->intro,
        ]);

//        return redirect()->route('users.edit.profile', $id);
    }
    public function edit($id)
    {

    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('users.settings.profile', compact('user'));
    }

    public function message($id)
    {
        $user = User::findOrFail($id);
        return view('users.settings.message', compact('user'));
    }

    public function privacy($id)
    {
        $user = User::findOrFail($id);
        return view('users.settings.privacy', compact('user'));
    }
}
