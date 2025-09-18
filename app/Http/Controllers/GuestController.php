<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $departments = department::all();
        return view('pages.home', compact('departments'));
    }

    public function detail(department $department)
    {

        return view('pages.detail', compact('department'));
    }
}
