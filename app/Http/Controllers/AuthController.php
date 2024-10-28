<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Admin bilgilerini veritabanından al
        $admin = DB::table('admins')->where('username', $credentials['username'])->first();

        if ($admin && $this->checkPassword($credentials['password'], $admin->password)) {
            // Şifre doğrulandı, admin kullanıcısını giriş yap
            Auth::guard('admin')->loginUsingId($admin->id);

            return redirect()->intended('admin_home');
        }

        return redirect()->back()->with('message', 'Geçersiz kimlik bilgileri.');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    /**
     * Özel şifreleme algoritmasına göre şifre doğrulama.
     */
    protected function checkPassword($plainPassword, $hashedPassword)
    {
        return $plainPassword === $hashedPassword;
    }
}
