<?php

namespace App\Http\Controllers;

use App\Models\docs;
use App\Models\intern;
use App\Models\activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminInternController extends Controller
{

    public function intern()
    {
        $docs = docs::with('intern.user', 'department');
        $CountPeserta = intern::count();
        $docs = $docs->latest()->paginate(10);
        $AllDocs = docs::all();




        return view('admin.intern', compact('docs', 'CountPeserta', 'AllDocs'));
    }

    public function detail_intern(docs $docs)
    {
        $docs->load('intern.user', 'department');
        $passwordManual = $docs->intern->user->password_manual;
        return view('admin.detail-intern', compact('docs', 'passwordManual'));
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

        $file = urldecode($file);
        $docs = Docs::where('transcript', $file)
            ->orWhere('cv', $file)
            ->orWhere('application_letter', $file)
            ->firstOrFail();

        $path = $docs->transcript ?? $docs->cv ?? $docs->application_letter;

        if (!Storage::disk('public')->exists($path)) {
            return redirect()->back()->with('error', 'File Belum Diunggah');
        }

        // log activity
        activity::create([
            'activity' => 'update',
            'description' => 'update status peserta',
            'name' => Auth::user()->admin->fullname ?? request()->ip(),
            'visitor_id' => Auth::id() ?? null,
        ]);

        return redirect(Storage::url($path));
    }
}
