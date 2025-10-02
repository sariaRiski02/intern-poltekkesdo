<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\visitor;
use App\Models\activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfilController extends Controller
{
    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'nip' => 'nullable|string|max:50',
            'email' => 'nullable|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::where('id', Auth::id())->first();

        $admin = $user->admin;

        // Flag untuk mendeteksi apakah ada perubahan
        $hasChanges = false;
        $changes = [];

        // Cek perubahan untuk admin table
        if ($request->filled('name') && $admin->fullname !== $request->name) {
            $admin->fullname = $request->name;
            $hasChanges = true;
            $changes[] = 'nama';
        }

        if ($request->filled('nip') && $admin->nip !== $request->nip) {
            $admin->nip = $request->nip;
            $hasChanges = true;
            $changes[] = 'NIP';
        }

        // Cek perubahan untuk user table (email dan password)
        $userHasChanges = false;

        if ($request->filled('email') && $user->email !== $request->email) {
            $user->email = $request->email;
            $userHasChanges = true;
            $hasChanges = true;
            $changes[] = 'email';
        }

        if ($request->filled('password')) {
            // Karena password di-hash, kita tidak bisa membandingkan langsung
            // Jadi jika password field diisi, kita anggap ada perubahan
            $user->password = bcrypt($request->password);
            $userHasChanges = true;
            $hasChanges = true;
            $changes[] = 'password';
        }




        // Hanya simpan jika ada perubahan
        if ($hasChanges) {
            if ($userHasChanges) {
                $user->save();
            }
            $admin->save();

            $changesList = implode(', ', $changes);
            return redirect()->back()->with('success', "Profil berhasil diperbarui");
        }

        // log activity
        activity::create([
            'activity' => 'create',
            'description' => 'mendaftar lamaran magang',
            'name' => Auth::user()->intern->fullname ?? request()->ip(),
            'visitor_id' => visitor::where('ip', request()->ip())->first()->id ?? null,
        ]);

        return redirect()->back()->with('info', 'Tidak ada perubahan data yang dilakukan.');
    }
}
