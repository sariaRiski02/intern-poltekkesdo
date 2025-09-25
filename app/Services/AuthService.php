<?php


namespace App\Services;

use App\Models\admin;
use Illuminate\Support\Facades\Auth;



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

        $remember = request()->filled('remember');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin.dashboard');
        }

        dd('error');
        return redirect()->back()->withErrors([
            'error' => 'Email, NIP atau Passwordnya Salah, Coba lagi!',
        ]);
    }


    public function registerAdmin($data)
    {
        // create user
        $user = new \App\Models\User();
        $user->name = $data['fullname'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->role = 'admin';
        $user->save();

        // create admin
        $admin = new admin();
        $admin->fullname = $data['fullname'];
        $admin->nip = $data['nip'];
        $admin->no_hp = $data['no_hp'];
        $admin->user_id = $user->id;
        $admin->save();

        return $admin;
    }
}
