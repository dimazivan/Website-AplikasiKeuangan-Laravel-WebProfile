<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
        return view('admin.login', [
            'title' => $title,
        ]);
    }

    public function login(Request $request)
    {
        $waktu = Carbon::now();

        $validator = Validator::make(request()->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        // dd(
        //     $request->all(),
        //     $waktu,
        // );

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            if (auth()->user() != null) {
                return redirect('/');
            } else {
                if (Auth::attempt($request->only('username', 'password'))) {
                    if (auth()->user()->role == 'admin') {
                        // Alert::success('Congrats', 'You\'ve Successfully Login');
                        toast('You\'ve Successfully Login!', 'success');
                        return redirect('/');
                    } elseif (auth()->user()->role == 'keuangan') {
                        // Alert::success('Congrats', 'You\'ve Successfully Login');
                        toast('You\'ve Successfully Login!', 'success');
                        return redirect('/');
                    } else {
                        return redirect('/login');
                    }
                } else {
                    toast('Username atau Password Anda Salah', 'warning');
                    // Alert::warning('Login Gagal', 'Username atau Password Anda Salah');
                    return redirect('/login');
                }
            }

            // return redirect()->route("user.index")->with("info", "Data Users has been saved");
        }
    }

    public function logout()
    {
        Auth::logout();
        // Alert::success('Congrats', 'You\'ve Successfully Logout');
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
