<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{


    public function index()
    {
        return view('page.login');
    }
    public function authenticate(Request $request)
    {
        $data = $request->all();

        $validasi = [
            'username' => 'required',
            'password' => 'required',
        ];
        $message = ['required' => ':attribute harus diisi'];
        Validator::make($data, $validasi, $message)->validate();

        $userdata = DB::table('users as usr')
            ->select(['usr.*'])
            ->where('usr.username', '=', $data['username'])
            ->first();

        if ($userdata == null) {
            return redirect()->route('login')->with('error', 'Username tidak ditemukan');
        } else {
            $credentials = $request->only('username',  'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                // put session
                Session::put('id', $userdata->id);
                Session::put('nama', $userdata->nama);
                Session::put('username', $userdata->username);

                // masuk ke dashboard
                return redirect('home')->with('success', 'Selamat datang ' . session('nama'));
            }
            return redirect()->route('login')->with('error', 'Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil Logout');
    }
}
