<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\admin;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public AuthService $authService;

    public function __construct(AuthService $authService)
    {

        $this->authService = $authService;
    }

    public function login()
    {
        $admin = '';
        if (request()->routeIs('admin.login')) {
            $admin = 'NIP';
        }
        return view('pages.login', compact('admin'));
    }

    public function login_admin_process(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);



        // cek if email is nip
        if (admin::where('nip', $request->username)->exists()) {
            // attempt to login as admin
            $credentials = [
                'nip' => $request->username,
                'password' => $request->password,
            ];
            return $this->authService->loginAdminNip($credentials);
        }

        if (User::where('email', $request->username)->exists()) {
            // attempt to login as user
            $credentials = [
                'email' => $request->username,
                'password' => $request->password,
            ];

            return $this->authService->loginAdminEmail($credentials);
        }


        return redirect()->back()->withErrors([
            'error' =>
            'Email, NIP atau Passwordnya Salah, Coba lagi!'
        ]);
    }

    public function login_intern_process(Request $request)
    {
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('username', 'password');

        $credentials = [
            'email' => $request->username,
            'password' => $request->password,
        ];
        $role = user::where('email', $credentials['email'])->first()->role;
        if ($role != 'intern') {
            return redirect()->back()->withErrors([
                'error' => 'Silahkan Login Menggunakan Akun Peserta'
            ]);
        }
        $remember = $request->filled('remember');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors([
            'error' => 'Email atau Passwordnya Salah, Coba lagi!',
        ]);
    }

    public function register()
    {

        return view('pages.register');
    }

    public function register_admin_process(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'nip' => 'required|string|min:8|max:20',
            'registration_code' => 'required|string',
        ]);

        if ($request->registration_code != ENV('REGISTRATION_CODE')) {
            return redirect()->beck()->withErrors([
                'error' => 'kode registrasi salah, silahkan coba lagi'
            ]);
        }

        return $this->authService->registerAdmin($request);
    }

    public function register_intern_process(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users.email',
            'password' => 'required|confirmed|min:6',
        ]);

        return $this->authService->registerIntern($request);
    }


    public function logout(Request $request)
    {


        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('message', 'You have been logged out successfully.');
    }
}
