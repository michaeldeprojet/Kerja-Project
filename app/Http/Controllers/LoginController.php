<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Login;
use App\Models\User;
use App\Models\DataAkunController;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)) {
            $user = Auth::user();

            switch($user->role) {
                case User::ADMIN:
                    return redirect('/dashboardadmin');
                case User::KAKOMLI:
                    return redirect('/dashboardkakomli');
                case User::PEMBIMBING:
                    return redirect('/dashboardpembimbing');
                case User::SISWA:
                    return redirect('/dashboardsiswa');
                default:
                    return redirect('/login');
            }
        }

        return redirect('/login');
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
