<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
