<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthLogin extends Controller
{
    function login(Request $request) {
        $input          = $request->only('email', 'password');
        $misc           = $request->only('remember', 'roles');

        // var_dump($input, $misc, !empty($misc['remember']) ? true : false);

        auth()->guard($misc['roles'])->attempt($input, !empty($misc['remember']) ? true : false);
        if(auth()->guard($misc['roles'])->check()) {
            return response()->json([
                'severity' => 'success',
                'error' => false,
                'success' => true,
                'title' => 'Berhasil!',
                'html' => "Akun anda terdeteksi, sistem akan mengarahkan anda ke halaman dasbor sesuai dengan akun anda.",
                'redirect' => "{$misc['roles']}.main",
            ], 200);
        } else {
            return response()->json([
                'severity' => 'error',
                'error' => true,
                'success' => false,
                'title' => 'Maaf...',
                'html' => "Nama pengguna atau Kata Sandi dengan email <strong>{$input['email']}</strong> tidak dapat ditemukan! Periksa kembali ejaan anda ya?",
            ], 401);
        }
    }

    function logout(Request $request) {
        auth()->guard('siswa')->logout();
        auth()->guard('guru')->logout();
        auth()->guard('pegawai')->logout();
        auth()->guard('admin')->logout();
        return response()->json([
            'severity' => 'success',
            'error' => false,
            'success' => true,
            'title' => 'Berhasil!',
            'html' => 'Anda telah berhasil keluar. Tekan OK dan anda telah berhasil keluar dari sesi ini',
        ], 200);
    }
}
