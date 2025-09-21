<?php

namespace App\Http\Controllers;


use App\Models\docs;

use App\Models\intern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function intern()
    {
        $docs = docs::with('intern.user', 'department');
        $CountPeserta = intern::count();
        $docs = $docs->latest()->paginate(5);
        $AllDocs = docs::all();

        return view('admin.intern', compact('docs', 'CountPeserta', 'AllDocs'));
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

    public function edit_status(docs $docs, $status)
    {

        // Validate the status input
        $validStatuses = ['pending', 'diterima', 'ditolak', 'selesai'];
        if (!in_array($status, $validStatuses)) {
            return redirect()->back()->with('error', 'Status tidak valid.');
        }

        // Update the status
        $docs->status = $status;
        $docs->save();

        return redirect()->route('admin.detail-intern', $docs->slug)->with('success', 'Status peserta berhasil diperbarui.');
    }

    public function document($file)
    {

        $docs = Docs::where('transcript', $file)
            ->orWhere('cv', $file)
            ->orWhere('application_letter', $file)
            ->firstOrFail();

        $path = $docs->transcript ?? $docs->cv ?? $docs->application_letter;

        if (!Storage::exists($path)) {
            return redirect()->back()->with('error', 'File Belum Diunggah');
        }

        return redirect(Storage::url($path));
    }
}
