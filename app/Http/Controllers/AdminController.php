<?php

namespace App\Http\Controllers;

use App\Models\docs;
use App\Models\intern;
use App\Models\visitor;
use App\Models\activity;
use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function dashboard()
    {
        $peserta = intern::count();
        $department = department::where('is_active', true)->get()->count();
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
        $departments = department::withCount('intern')->where('is_active', true)->latest()->paginate(10);
        return view('admin.department', compact('departments'));
    }

    public function add_intern()
    {
        $departments = department::where('is_active', true)->get();
        return view('admin.form.add-intern-form', compact('departments'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function sertifikat(Request $request, docs $docs)
    {


        $request->validate([
            'sertifikat' => 'required|mimes:pdf,png,jpg,jpeg|max:5120', // max 5MB
        ], [
            'sertifikat.mimes' => 'File harus berupa PDF, PNG, JPEG atau JPG.',
            'sertifikat.max' => 'Ukuran file maksimal 5MB.',
        ]);


        if ($request->file('sertifikat')) {
            if ($docs->certificate) {
                Storage::delete($docs->certificate);
            }
            $docs->certificate = $request->file('sertifikat')->store('documents/certificates', 'public');
            $docs->save();
        }

        return redirect()->back()->with('success', 'Sertifikat berhasil diunggah.');
    }

    public function delete_sertifikat(docs $docs)
    {
        if ($docs->certificate) {
            Storage::delete($docs->certificate);
            $docs->certificate = null;
            $docs->save();
        }

        return redirect()->back()->with('success', 'Sertifikat berhasil dihapus.');
    }
}
