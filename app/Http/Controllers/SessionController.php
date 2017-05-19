<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'account' => 'required|account',
            'password' => 'required'
        ]);
        if(preg_match('/^[1][358][0-9]{9}$/',$request->account)){
            $credentials = [
                'phone' => $request->account,
                'password' => $request->password,
            ];
        }else{
            $credentials = [
                'email' => $request->account,
                'password' => $request->password,
            ];
        }
        if (Auth::attempt($credentials, $request->has('remember'))) {
//            session()->flash('success', '欢迎回来！');
//            return redirect()->route('home', [Auth::user()]);
//            return Redirect::intended();
            return redirect()->intended();
        } else {
            session()->flash('danger', '很抱歉，您的账号和密码不匹配');
            return redirect()->back();
        }

        return;
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
