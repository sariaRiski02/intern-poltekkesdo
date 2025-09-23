<?php

namespace App\Http\Controllers;

use App\Models\docs;
use App\Models\intern;
use App\Models\visitor;
use App\Models\activity;
use App\Models\department;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard()
    {
        $peserta = intern::count();
        $department = department::count();
        $visitor = visitor::count();
        $docs = docs::with('intern', 'department');
        $interns = $docs->latest()->take(5)->get();
        $docs = $docs->get();
        $activities = activity::latest()->take(3)->get();

        return view('admin.dashboard', compact('peserta', 'department', 'visitor', 'docs', 'activities', 'interns'));
    }

    public function activity_index()
    {

        $activities = activity::with('intern')->latest()->paginate(10);

        return view('admin.activity', compact('activities'));
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
