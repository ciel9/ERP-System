<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogin;
use App\Models\PinjamMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd(UserLogin::all());
        $credentials = $request->only('username', 'password');
        $res = UserLogin::getData($credentials);
        // dd($res->role);
        if (isset($res) && $res->role == 'superadmin') {
            // Authentication passed...
             $pinjam_mobil = PinjamMobil::getData();
             $user = User::getData();
             return view('dashboard.dashboard', compact('pinjam_mobil','user'));
        }

        else if (isset($res) && $res->role == 'admin') {
             $pinjam_mobil = PinjamMobil::getData();
             $user = User::getData();
             return view('dashboard.dashboard-admin', compact('pinjam_mobil','user'));
        }

        else  if ((isset($res) && $res->role == 'user'))
        {
             $pinjam_mobil = PinjamMobil::getData();
             $user = User::getData();
             return view('dashboard.dashboard-user', compact('pinjam_mobil','user'));
        }

        return redirect()->back()->with('error', 'Login failed. Please check your credentials.');
    }

    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect()->route('login'); // Redirect to login page
    }

    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|unique:user_logins',
            'password' => 'required|min:8',
        ]);

        // Create a new user
        $user = new UserLogin();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role = 'user'; // Assuming 'user' as the default role
        $user->save();

        // Redirect the user after registration
        return redirect()->route('login')->with('success', 'Registration successful. You can now login.');
    }


    public function registerForm()
    {
        return view('auth.register');
    }

    public function editForm(Request $request) {
        // Mendapatkan ID data yang akan diedit dari query parameter
        $id = $request->query('id');

        // Mendapatkan data pinjam_mobil berdasarkan ID
        $pinjam_mobil = PinjamMobil::find($id);
        dd($pinjam_mobil);
        // Kirim data ke view edit
        return view('edit_pinjam_mobil', compact('pinjam_mobil'));
    }


}
