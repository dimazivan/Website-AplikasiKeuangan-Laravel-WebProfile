<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Log_users;
use App\Models\Log_auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Login Page";

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

        if (auth()->user() != null) {
            // Log
            Log_auth::create([
                'ip_address' => $ip_address,
                'activity' => 'login',
                'description' => 'user already have session or login',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            return redirect('/');
        } else {
            return view('admin.login', [
                'title' => $title,
            ]);
        }
    }

    public function login(Request $request)
    {
        $waktu = Carbon::now();

        // dd(
        //     $request->all(),
        // );

        echo csrf_token();

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

        $validator = Validator::make(request()->all(), [
            'username' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ]);

        // dd(
        //     $request->all(),
        //     $waktu,
        //     $validator->errors(),
        //     $ip_address,
        // );

        if ($validator->fails()) {
            // Log
            Log_auth::create([
                'ip_address' => $ip_address,
                'activity' => 'login',
                'description' => 'error validation',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            return back()->withErrors($validator->errors());
        } else {
            if (auth()->user() != null) {
                // Log
                Log_auth::create([
                    'ip_address' => $ip_address,
                    'activity' => 'login',
                    'description' => 'error validation',
                    'status' => 'failed',
                    'mac_address' => '',
                ]);

                return redirect('/');
            } else {
                if (Auth::attempt($request->only('username', 'password'))) {
                    // Log
                    Log_auth::create([
                        'ip_address' => $ip_address,
                        'activity' => 'login',
                        'description' => 'login success as '.$request->username,
                        'status' => 'success',
                        'mac_address' => '',
                    ]);

                    if (auth()->user()->role == 'admin') {
                        toast('You\'ve Successfully Login!', 'success');
                        return redirect('/');
                    } elseif (auth()->user()->role == 'keuangan') {
                        toast('You\'ve Successfully Login!', 'success');
                        return redirect('/');
                    } else {
                        return redirect('/login');
                    }
                } else {
                    // Log
                    Log_auth::create([
                        'ip_address' => $ip_address,
                        'activity' => 'login',
                        'description' => 'invalid data login',
                        'status' => 'failed',
                        'mac_address' => '',
                    ]);

                    toast('Username atau Password Anda Salah', 'warning');
                    return redirect('/login');
                }
            }
            // return redirect()->route("user.index")->with("info", "Data Users has been saved");
        }
    }

    public function logout()
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

        if (auth()->user() == null) {
            Log_auth::create([
                'ip_address' => $ip_address,
                'activity' => 'logout',
                'description' => 'failed logout auth or session not found',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            toast('Logout Failed Session or User Not Found', 'info');
            return redirect('/login');
        }

        Log_auth::create([
            'ip_address' => $ip_address,
            'activity' => 'logout',
            'description' => 'logout success as '.auth()->user()->username,
            'status' => 'success',
            'mac_address' => '',
        ]);

        Auth::logout();
        toast('You\'ve Successfully Logout!', 'success');
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
