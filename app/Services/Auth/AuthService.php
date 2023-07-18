<?php

namespace App\Services\Auth;

use App\Models\Log_auth;
use App\Models\Log_users;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class AuthService
{
    public function loginAuth($request)
    {
        dd(
            $request->all(),
        );

        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from remote address
        else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }

        $cekaktif = User::where('username', $request->username)
        ->where('status', 1)
        ->get();

        if(!empty($cekaktif[0])) {
            if (Auth::attempt($request->only('username', 'password'))) {
                // Log
                Log_auth::create([
                    'ip_address' => $ip_address,
                    'activity' => 'login',
                    'description' => 'login success as '.$request->username,
                    'status' => 'success',
                    'mac_address' => '',
                ]);

                // if (auth()->user()->isAdmin() || auth()->user()->isSuper()) {
                //     toast('You\'ve Successfully Login!', 'success');
                //     return toRoute('dashboard.index');
                // } elseif (auth()->user()) {
                //     toast('You\'ve Successfully Login!', 'success');
                //     return redirect('/');
                // } else {
                //     return redirect('/login');
                // }

                throw new Exception('You\'ve Successfully Login!');

            } else {
                // Log
                Log_auth::create([
                    'ip_address' => $ip_address,
                    'activity' => 'login',
                    'description' => 'invalid data login',
                    'status' => 'failed',
                    'mac_address' => '',
                ]);

                // toast('Username atau Password Anda Salah', 'warning');
                return redirect('/login');
            }
        } else {
            // Log tidak aktif
            Log_auth::create([
                'ip_address' => $ip_address,
                'activity' => 'login',
                'description' => 'invalid crendential status as '.$request->username,
                'status' => 'failed',
                'mac_address' => '',
            ]);

            // toast('Status krendential Anda tidak aktif', 'warning');
            return redirect('/login');
        }


    }
}
