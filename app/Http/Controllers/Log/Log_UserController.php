<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\Log_users;
use Carbon\Carbon;
use File;
use Redirect;

class Log_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Log Data User";
        $data = Log_users::select(
            'log_users.*',
            'users.first_name as nama_depan',
            'users.last_name as nama_belakang',
            'users.username',
        )
        ->join('users', 'users.id', '=', 'log_users.users_id')
        ->get();

        // dd(
        //     $data,
        //     $data[0],
        // );

        if (auth()->user()->isAdmin() || auth()->user()->isSuper()) {
            return view('admin.pages.user.log_data_user', [
                'title' => $title,
                'data' => $data,
            ]);
        } else {
            return back()->with("info", "User didnt have authorization");
        }
    }

    public function jsonLog()
    {
        $data = Log_users::select(
            'log_users.*',
            'users.first_name as nama_depan',
            'users.last_name as nama_belakang',
            'users.username',
        )
        ->join('users', 'users.id', '=', 'log_users.users_id')
        ->get();

        $data_json = json_encode($data);

        // if(auth()->user()->isAdmin() || auth()->user()->isSuper()) {
        //     $fileName = 'log-user'.'&'.Carbon::now()->toString().'json';
        //     $fileStorePath = public_path('/upload/json/'.$fileName);
        //     File::put($fileStorePath, $data_json);
        //     return response()->download($fileStorePath);
        // }

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Log User',
            'data'    => $data
        ], 200);
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
