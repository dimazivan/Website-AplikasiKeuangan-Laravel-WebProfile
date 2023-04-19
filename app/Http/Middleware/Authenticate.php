<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Log_auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
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

        if (!$request->expectsJson()) {
            // Log
            Log_auth::create([
                'ip_address' => $ip_address,
                'activity' => 'login',
                'description' => 'error auth',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            toast('Anda belum login atau sesi login Anda habis', 'warning');
            return route('index.login');
        }
    }
}
