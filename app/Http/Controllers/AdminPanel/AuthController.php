<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->username;
        $password = $request->password;


        try {
            $query = User::where('username', $username)->orWhere('email', $username);
            if ($query->exists()) {
                $user = $query->first();
                if (Hash::check($password, $user->password)) {
                    Auth::login($user);
                    return redirect()->route('admin.dashboard')->with('success', 'Başarıyla Giriş Yapıldı');
                } else {
                    return redirect()->back()->with('error', 'Kullanıcı Adı Veya Şifre Yanlış!');
                }
            } else {
                return redirect()->back()->with('error', 'Böyle Bir Kullanıcı Bulunamadı!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.loginPage');
    }
}
