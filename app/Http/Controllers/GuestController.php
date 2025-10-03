<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index()
    {
        $departments = department::where('is_active', true)->get();
        return view('pages.home', compact('departments'));
    }

    public function detail(department $department)
    {

        // if(Auth::check() && Auth::user()->intern)
        return view('pages.detail', compact('department'));
    }
}
