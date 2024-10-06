<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('admin/login')->withErrors(['message' => 'You do not have admin access']);
            }
        }
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

//        $request->session()->invalidate();
//
//        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
