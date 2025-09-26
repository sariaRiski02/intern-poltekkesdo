<?php


namespace App\Services;

use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthService
{
    public function loginAdminNip($credentials)
    {

        $nip = $credentials['nip'];
        $admin = admin::where('nip', $nip)->first()->with('user')->first();

        $user_email = $admin->user->email;
        $credentials = [
            'email' => $user_email,
            'password' => $credentials['password'],
        ];


        return $this->loginAdminEmail($credentials);
    }

    public function loginAdminEmail($credentials)
    {

        $role = user::where('email', $credentials['email'])->first()->role;
        if ($role != 'admin') {
            return redirect()->back()->withErrors([
                'error' => 'Silahkan Login Menggunakan Akun Admin',
            ]);
        }


        $remember = request()->filled('remember');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors([
            'error' => 'Email, NIP atau Passwordnya Salah, Coba lagi!',
        ]);
    }


    public function registerAdmin($data)
    {

        // create user
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->role = 'admin';
        $user->save();

        // create admin
        $admin = new admin();
        $admin->fullname = $data['name'];
        $admin->nip = $data['nip'];
        $admin->no_hp = $data['no_hp'];
        $admin->user_id = $user->id;
        $admin->save();

        if (!$admin) {
            return redirect()->back()->withErrors([
                'error' => 'Email atau Passwordnya Salah, Coba lagi!',
            ]);
        }


        return redirect()->route('admin.login')
            ->with('success', 'Registrasi sukses 🎉, silakan masuk untuk melanjutkan.');
    }

    public function registerIntern($data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role = 'intern';
        $user->password = Hash::make($data['password']);
        $user->save();

        if (!$user) {
            return redirect()->back()->withErrors([
                'error' => 'Email atau Passwordnya Salah, Coba lagi!',
            ]);
        }

        return redirect()->route('admin.login')
            ->with('success', 'Registrasi sukses 🎉, silakan masuk untuk melanjutkan.');
    }
}
