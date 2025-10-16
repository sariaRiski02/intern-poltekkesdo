<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\intern;
use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index()
    {
        $departments = department::where('is_active', true)->get();
        $internCount = intern::count();
        return view('pages.home', compact('departments', 'internCount'));
    }

    public function detail(department $department)
    {
        $registered = false;


        if (Auth::check()) {
            $interns = Auth::user()?->intern()->get();
            foreach ($interns as $intern) {
                if ($intern->docs()->first()->department_id == $department->id) {
                    $registered = true;
                }
            }
        }


        return view('pages.detail', compact('department', 'registered'));
    }
}
