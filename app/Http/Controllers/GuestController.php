<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        
        $check = Auth::user()?->intern()?->first()?->departments()->get()->where('id', $department->id)->first()?->id;
        $registered = Auth::check() && $department->id === $check;
            
        
        return view('pages.detail', compact('department', 'registered'));
    }
}
