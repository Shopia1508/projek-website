<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showAdminLogin()
    {
        return view('admin.dashboard');
    }


    public function adminLogin(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['msg' => 'Email atau Password salah']);
        }

        Auth::guard('admin')->login($admin);
        return redirect()->route('admin.index');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


}
