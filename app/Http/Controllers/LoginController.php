<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


        session(['admin_logged_in' => true]);

        return redirect('admin.index');
    }

   
}
