<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PostResource;
use App\Models\User;
use App\Models\Log_users;
use Carbon\Carbon;
use Redirect;

class Api_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        $status = "DATA MASOKK BOZZZ";
        $message = "List Data";
        $skip = 0;
        $limit = 0;

        return new PostResource($status, $message, $skip, $limit, $data);
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
        $waktu = Carbon::now();

        $validator = Validator::make(request()->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|min:5|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:40',
            'cbrole' => 'required',
            'phone' => 'required|numeric|digits_between:10,13',
            'address' => 'required|max:255',
            'desc' => 'max:255',
            'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ], )->setAttributeNames(
            [
                'first_name' => '"Nama Depan"',
                'last_name' => '"Nama Belakang"',
                'phone' => '"Nomor Telepon"',
            ],
        );

        // dd(
        //     $request->all(),
        //     $validator,
        // );

        if ($validator->fails()) {
            // Log
            Log_users::create([
                'users_id' => auth()->user()->id,
                'role' => auth()->user()->role,
                'activity' => 'insert Data',
                'description' => 'error validation',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            return response()->json($validator->errors(), 422);
            // return back()->withErrors($validator->errors());
        }

        // Cek Data
        $cek = User::where('username', $request->username)
               ->orWhere('email', $request->email)
               ->get();

        if (empty($cek[0])) {
            // if ($request->hasFile('file_foto')) {
            //     if (filesize($request->file_foto) > 1000 * 10000) {
            //         // return back()->with("info", "File foto anda melebihi batas maksimal ukuran upload");
            //         return response()->json($validator->errors(), 422);
            //     }
            // }

            // if ($request->file_foto->getClientOriginalExtension() == "jpg" ||
            // $request->file_foto->getClientOriginalExtension() == "jpeg" ||
            // $request->file_foto->getClientOriginalExtension() == "png" ||
            // $request->file_foto->getClientOriginalExtension() == "gif") {
            // if ($request->hasFile('file_foto')) {
            //     $file = $request->file('file_foto');
            //     $nama_file = time() . "_" . $file->getClientOriginalName();
            //     $tujuan_upload = 'data_file/user/foto';
            //     $file->move($tujuan_upload, $nama_file);
            // } else {
            //     $nama_file = "";
            // }

            // Query insert
            $post = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->cbrole,
                'phone' => $request->phone,
                'address' => $request->address,
                'detail_address' => $request->desc,
                'password' => bcrypt($request->password),
                // 'file_foto' => $nama_file,
                'created_at' => $waktu,
                'updated_at' => $waktu,
            ]);

            // Log
            Log_users::create([
                'users_id' => auth()->user()->id,
                'role' => auth()->user()->role,
                'activity' => 'insert Data',
                'description' => 'data saved',
                'status' => 'success',
                'mac_address' => '',
            ]);

            // return redirect()->route("user.index")->with("info", "Data Users has been saved");

            return response()->json([
                'success' => true,
                'message' => 'Data Users has been saved',
                'data'    => $post
            ]);
        // } else {
        //     // return back()->with("info", "Pastikan format file foto anda bertipe gambar");
        //     return response()->json($validator->errors(), 422);
        // }
        } else {
            // Log
            Log_users::create([
                'users_id' => auth()->user()->id,
                'role' => auth()->user()->role,
                'activity' => 'insert Data',
                'description' => 'duplicated entity',
                'status' => 'failed',
                'mac_address' => '',
            ]);

            // return back()->with("info", "Duplicated Data Users Found");
            return response()->json($validator->errors(), 422);
        }
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
