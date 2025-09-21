<?php

namespace App\Http\Controllers;


use App\Models\docs;
use App\Models\intern;
use App\Models\department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Rules\IndonesianPhoneNumber;
use Illuminate\Support\Facades\Auth;

class InternController extends Controller
{
    public function index(department $department)
    {
        // Set locale to Indonesian
        App::setLocale('id');
        return view('pages.form', compact('department'));
    }

    public function internStore(Request $request, department $department)
    {

        // Set locale to Indonesian for validation messages
        App::setLocale('id');

        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_hp' => ['required', 'string', 'max:13', new IndonesianPhoneNumber()],
            'alamat' => 'required|string|max:500',
            'tanggal_lahir' => [
                'required',
                'date',
                'before:today',
                'after:1900-01-01'
            ],
            'universitas' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'tanggal_mulai' => [
                'required',
                'date',
                'after_or_equal:today'
            ],
            'tanggal_selesai' => [
                'required',
                'date',
                'after:tanggal_mulai'
            ],
            'surat_pengajuan' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
            'transkrip' => 'nullable|file|mimes:pdf,png,jpeg,jpg|max:5120'
        ], [
            // Custom messages dalam bahasa Indonesia
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
            'tanggal_lahir.after' => 'Tanggal lahir tidak valid.',
            'no_hp.regex' => 'Format nomor HP tidak valid.',
            'tanggal_mulai.after_or_equal' => 'Tanggal mulai tidak boleh kurang dari hari ini.',
            'tanggal_selesai.after' => 'Tanggal selesai harus setelah tanggal mulai.',
            'surat_pengajuan.required' => 'Surat pengajuan wajib diunggah.',
            'surat_pengajuan.mimes' => 'Surat pengajuan harus berformat PDF, DOC, atau DOCX.',
        ]);


        $intern = new intern();
        $intern->user_id = optional(Auth::user())->id ?? Auth::first()->id;
        $intern->fullname = $validatedData['nama_lengkap'];
        $intern->slug = Str::slug($validatedData['nama_lengkap'] . '-' . Str::random(5));
        $intern->university = $validatedData['universitas'];
        $intern->faculty = $validatedData['fakultas'];
        $intern->major = $validatedData['jurusan'];
        $intern->address = $validatedData['alamat'];
        $intern->no_hp = $validatedData['no_hp'];
        $intern->birthday = $validatedData['tanggal_lahir'];

        $intern->save();


        $docs = new docs();
        $docs->intern_id = $intern->id;
        $docs->slug = Str::slug($validatedData['nama_lengkap'] . '-' . Str::random(5));
        $docs->status = 'pending';
        $docs->department_id = $department->id;
        $docs->date_start = $validatedData['tanggal_mulai'];
        $docs->date_end = $validatedData['tanggal_selesai'];

        // simpan surat pengajuan
        if ($request->hasFile('surat_pengajuan')) {
            $suratPath = $request->file('surat_pengajuan')->store(
                'documents/surat/pengajuan/',
                'public'
            );
            $docs->application_letter = $suratPath;
        }

        // simpan cv
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store(
                'documents/cv/',
                'public'
            );

            $docs->cv = $cv;
        }

        // simpan transkrip
        if ($request->has('transkrip')) {
            $transkrip = $request->file('transkrip')->store(
                'documents/transkript/',
                'public'
            );
            $docs->$transkrip = $transkrip;
        }
        $docs->save();

        return redirect()->route('announcement');
    }
}
