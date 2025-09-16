<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function intern()
    {

        return view('admin.intern');
    }

    public function department()
    {
        return view('admin.department');
    }

    public function add_intern()
    {
        return view('admin.add-intern');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
