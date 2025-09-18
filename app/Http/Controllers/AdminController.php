<?php

namespace App\Http\Controllers;


use App\Models\docs;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function intern()
    {
        $docs = docs::with('intern.user', 'department')->get();
        return view('admin.intern', compact('docs'));
    }
    public function detail_intern(docs $docs)
    {
        return view('admin.detail-intern', compact('docs'));
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
