<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Log_auth;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // dd(
        //     $request->user()->role,
        //     in_array($request->user()->role, $roles),
        //     !in_array($request->user()->role, $roles),
        //     in_array($request->user()->role, $roles, false),
        //     in_array($request->user()->role, $roles, true),
        //     is_numeric($request->user()->role),
        // );

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

        if (in_array($request->user()->role, $roles)) {
            // if (is_numeric($request->user()->role)) {

            // dd(
            //     $request->all(),
            // );

            return $next($request);
        } else {
            // Log
            Log_auth::create([
                'ip_address' => $ip_address,
                'activity' => 'login',
                'description' => 'error role',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            // Alert::warning('Ups...', 'Terjadi Kesalahan');
            // return redirect('/');
            abort(403, 'Unauthorized');
        }

        // Log
        Log_auth::create([
            'ip_address' => $ip_address,
            'activity' => 'login',
            'description' => 'error role',
            'status' => 'failed',
            'mac_address' => '',
        ]);

        // Alert::warning('Ups...', 'Terjadi Kesalahan');
        // return redirect('/');

        abort(403, 'Unauthorized');

    }
}
