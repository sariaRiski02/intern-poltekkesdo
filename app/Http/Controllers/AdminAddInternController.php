<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\intern;
use App\Models\visitor;
use App\Models\activity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAddInternController extends Controller
{

    public function add_intern_process(Request $request)
    {

        $request->validate([
            'fullname' => "required|string|max:255",
            'email' => "required|email|unique:users,email",
            'university' => "nullable|string|max:255",
            'faculty' => "nullable|string|max:255",
            'major' => "nullable|string|max:255",
            'birth_date' => "nullable|date",
            'address' => "nullable|string|max:255",
            'no_hp' => "nullable|string|max:20",
            'date_start' => "nullable|date",
            'date_end' => "nullable|date|after_or_equal:date_start",
            'application_letter' => "nullable|file|mimes:pdf|max:2048",
            'cv' => "nullable|file|mimes:pdf|max:2048",
            'transcript' => "nullable|file|mimes:pdf|max:2048",
        ]);



        // Create user
        $passwordPlain = Str::slug(Str::lower($request->fullname)) . random_int(100, 999);
        $passwordEnskript = bcrypt($passwordPlain); // Default password


        $user = User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => $passwordEnskript,
            'role' => 'intern',
            'password_manual' => $passwordPlain,
        ]);

        // Create intern
        $slug = Str::slug($request->fullname) . '-' . Str::random(5);
        $intern = intern::create([
            'fullname' => $request->fullname,
            'slug' => $slug,
            'university' => $request->university,
            'faculty' => $request->faculty,
            'major' => $request->major,
            'address' => $request->address,
            'no_hp' => $request->no_hp,
            'birthday' => $request->birth_date,
            'user_id' => $user->id,
        ]);

        $intern->docs()->create([

            'slug' => 'DOC-' . Str::upper(Str::random(10)),
            'department_id' => $request->department_id,
            'application_letter' => $request->file('application_letter') ? $request->file('application_letter')->store('documents/surat/pengajuan', 'public') : null,
            'cv' => $request->file('cv') ? $request->file('cv')->store('documents/cv', 'public') : null,
            'transcript' => $request->file('transcript') ? $request->file('transcript')->store('documents/transcript', 'public') : null,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'status' => 'pending',
        ]);

        // log activity
        activity::create([
            'activity' => 'Add',
            'description' => 'menambahkan pesarta baru secara manual',
            'name' => Auth::user()->admin->fullname ?? request()->ip(),
            'visitor_id' => visitor::where('ip', request()->ip())->first()->id ?? null,
        ]);


        return redirect()->route('admin.intern');
    }
}
