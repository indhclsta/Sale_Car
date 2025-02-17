<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;

class AuthLogin extends Controller
{
    function login(){
        return view('login');
    }
    function home(){
        return view('home');
    }
    function btn(Request $request)
    {
        // Ambil input email dan password dari request
        $email = $request->input('email');
        $password = $request->input('password');

        if($email == "admin@gmail.com" && $password == "123"){
            return redirect()->intended('home');
        }elseif($email == "customer@gmail.com" && $password == "321"){
            return redirect()->intended('homeC');
        }
        else{
            return back()->withInput()->withErrors([
                'email' => 'email/password yang diberikan tidak sesuai dengan catatan kami.',
            ]);
        }

        // // Tentukan kunci untuk rate limiter berdasarkan email
        // $rateLimiterKey = 'login:' . $email;

        // // Cek apakah upaya login telah melebihi batas yang diizinkan
        // if (RateLimiter::tooManyAttempts($rateLimiterKey, 5)) {
        //     return back()->withInput()->withErrors([
        //         'email' => 'Terlalu banyak percobaan login. Silakan coba lagi nanti.',
        //     ]);
        // }

        // // Coba login dengan email dan password yang diberikan
        // if (Auth::attempt(['email' => $email, 'password' => $password])) {
        //     // Bersihkan rate limiter jika login berhasil
        //     RateLimiter::clear($rateLimiterKey);
        //     return redirect()->intended('home');
        // }else{
        //     // Tambahkan hitungan pada rate limiter jika login gagal
        //     RateLimiter::hit($rateLimiterKey);

        //     // Kembalikan ke halaman sebelumnya dengan pesan error
        //     return back()->withInput()->withErrors([
        //         'email' => 'yang diberikan tidak sesuai dengan catatan kami.',
        //     ]);
        // }
    }



    function register(){
        return view('register');
    }
    function submit(Request $request){
        $mobil = new Mobil();
        $mobil->name = $request->name;
        $mobil->email = $request->email;
        $mobil->password = $request->password;
        $mobil->save();
        return redirect()->route('home');
    }
}
