<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function adminDashboard()
    {
        return view('backend.admin-dashboard');
    }

    public function driverList()
    {
        $drivers = Driver::latest()->paginate(10);
        return view('backend.admin.driver', compact('drivers'));
    }
}
