<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }

    public function lichenceVerify()
    {
        return view('Frontend.lichence-Verify');
    }

    public function benefits()
    {
        return view('Frontend.benefits');
    }

    public function guidelines()
    {
        return view('Frontend.guidelines');
    }

    public function faq()
    {
        return view('Frontend.faq');
    }

    public function driversRegister()
    {
        return view('Frontend.register');
    }

    public function driversLogin()
    {
        return view('Frontend.login');
    }

    public function adminLogin()
    {
        return view('Frontend.admin-login');
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
