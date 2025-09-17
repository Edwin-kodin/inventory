<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        // load the admin-login blade file
        return view('layouts.admin-login');
    }

    public function login(Request $request)
    {
        // later we’ll handle real login, for now just redirect
        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        return view('layouts.dashboard');
    }
}
