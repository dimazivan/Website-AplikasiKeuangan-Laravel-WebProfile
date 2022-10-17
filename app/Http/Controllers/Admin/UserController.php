<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Data User";
        $data = User::all();

        return view('admin.pages.user.data_user', [
            'title' => $title,
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Halaman Data User";

        return view('admin.pages.user.add_user', [
            'title' => $title,
        ]);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'cbrole' => 'required',
            'phone' => 'required|numeric|sometimes|min:10|max:13',
            'address' => 'required|max:255',
            'desc' => 'max:255',
            'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        // dd(
        //     $request->all(),
        //     $validator->fails(),
        //     $waktu,
        // );

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            // Cek Data
            $cek = User::where('username', $request->username)
            ->orWhere('email', $request->email)
            ->get();

            if (empty($cek[0])) {
                // Query insert
                User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => $request->password,
                    'role' => $request->cbrole,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'detail_address' => $request->desc,
                    'password' => $request->password,
                    'created_at' => $waktu,
                    'updated_at' => $waktu,
                ]);

                return redirect()->route("user.index")->with("info", "Data Users has been saved");
            } else {
                return back()->with("info", "Duplicated Data Users Found");
            }
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
