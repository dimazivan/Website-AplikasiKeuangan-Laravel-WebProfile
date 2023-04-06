<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Log_users;
use Carbon\Carbon;
use Redirect;

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
        $jml_role = User::Role()->count();

        // dd(
        //     $jml_role,
        // );

        return view('admin.pages.user.data_user', [
            'title' => $title,
            'data' => $data,
        ]);
    }

    public function cekUsername($username)
    {
        $cekusername = User::CekUsername($username)->pluck('username');

        // dd(
        //     $cekusername
        // );

        return json_encode($cekusername);
    }

    public function cekEmail($email)
    {
        $cekemail = User::CekEmail($email)->pluck('email');

        // dd(
        //     $cekemail
        // );

        return json_encode($cekemail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Halaman Data User";
        $province = Province::pluck('name', 'id');

        // dd(
        //     $province,
        // );

        return view(
            'admin.pages.user.add_user',
            [
            'title' => $title,

        ],
            compact('province')
        );
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
            'cbcountry' => 'required',
            'cbprovince' => 'required',
            'cbcity' => 'required',
            'cbdistrict' => 'required',
            'cbward' => 'required',
            // 'phone' => 'required|numeric|sometimes|min:10|max:13',
            'phone' => 'required|numeric|digits_between:10,13',
            // 'phone' => 'required',
            'address' => 'required|max:255',
            'desc' => 'max:255',
            'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000',
        // ], [
        //     'phone.required' => 'Silahkan Masukan Nomor Telepon antara 10 sampai 13 digit angka',
        // ]);
        ], )->setAttributeNames(
            [
                'first_name' => '"Nama Depan"',
                'last_name' => '"Nama Belakang"',
                'phone' => '"Nomor Telepon"',
            ],
        );

        // dd(
        //     $request->all(),
        //     $validator->fails(),
        //     $waktu,
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

            return back()->withErrors($validator->errors());
        } else {
            // Cek Data
            $cek = User::cekUsername($request->username)
            // $cek = User::where('username', $request->username)
            ->orWhere('email', $request->email)
            ->get();

            if (empty($cek[0])) {
                if ($request->hasFile('file_foto')) {
                    if (filesize($request->file_foto) > 1000 * 10000) {
                        return back()->with("info", "File foto anda melebihi batas maksimal ukuran upload");
                    }
                } else {
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

                    return redirect()->route("user.index")->with("info", "Data Users has been saved");
                }

                if ($request->file_foto->getClientOriginalExtension() == "jpg" ||
                $request->file_foto->getClientOriginalExtension() == "jpeg" ||
                $request->file_foto->getClientOriginalExtension() == "png" ||
                $request->file_foto->getClientOriginalExtension() == "gif") {
                    if ($request->hasFile('file_foto')) {
                        $file = $request->file('file_foto');
                        $nama_file = time() . "_" . $file->getClientOriginalName();
                        $tujuan_upload = 'data_file/user/foto';
                        $file->move($tujuan_upload, $nama_file);
                    } else {
                        $nama_file = "";
                    }

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
                        'password' => bcrypt($request->password),
                        'file_foto' => $nama_file,
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

                    return redirect()->route("user.index")->with("info", "Data Users has been saved");
                } else {
                    return back()->with("info", "Pastikan format file foto anda bertipe gambar");
                }
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
        $title = "Halaman Profile User";

        if (isset($id)) {
            try {
                $decrypted = decrypt($id);
                // Log
            } catch (DecryptException $e) {
                return view('error.e_throw', [
                    'e' => ["Invalid Data"],
                ]);
            }

            $newid = Crypt::decrypt($id);
            $data = User::where('id', $newid)
            ->get();

            $datalog = Log_users::where('users_id', $newid)
            ->get();

            // dd(
            //     $data,
            //     $id,
            //     $newid,
            //     $data[0],
            //     $datalog,
            // );

            if (empty($data[0])) {
                return view('error.404');
            }

            return view('admin.pages.profile.profile', [
                'title' => $title,
                'data' => $data,
                'datalog' => $datalog,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Halaman Data User";

        try {
            $decrypted = decrypt($id);
            // Log
        } catch (DecryptException $e) {
            return view('error.e_throw', [
                'e' => ["Invalid Data"],
            ]);
        }

        // dd(
        //     $id,
        //     Crypt::decrypt($id),
        //     isset($id),
        // );

        if (isset($id)) {
            $newid = Crypt::decrypt($id);

            $data = User::where('id', $newid)
            ->get();

            // dd(
            //     $data,
            // );

            if (empty($data[0])) {
                return view('error.404');
            }

            return view('admin.pages.user.edit_user', [
                'title' => $title,
                'data' => $data,
            ]);
        }
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
        try {
            $decrypted = decrypt($request->id_user);
            // Log
        } catch (DecryptException $e) {
            return view('error.e_throw', [
                'e' => ["Invalid Data"],
            ]);
        }

        $validator = Validator::make(request()->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
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
        //     $id,
        //     strlen($id),
        //     decrypt($id),
        //     decrypt($request->id_user),
        // );

        if ($validator->fails()) {
            // Log
            Log_users::create([
                'users_id' => auth()->user()->id,
                'role' => auth()->user()->role,
                'activity' => 'update data',
                'description' => 'error validation',
                'status' => 'failed',
                'mac_address' => '',
            ]);
            return back()->withErrors($validator->errors());
        }

        if ($request->hasFile('file_foto')) {
            if (filesize($request->file_foto) > 1000 * 10000) {
                Log_users::create([
                    'users_id' => auth()->user()->id,
                    'role' => auth()->user()->role,
                    'activity' => 'update data',
                    'description' => 'error validation file size',
                    'status' => 'failed',
                    'mac_address' => '',
                ]);

                return back()->with("info", "File foto anda melebihi batas maksimal ukuran upload");
            }

            if ($request->file_foto->getClientOriginalExtension() == "jpg" ||
            $request->file_foto->getClientOriginalExtension() == "jpeg" ||
            $request->file_foto->getClientOriginalExtension() == "png" ||
            $request->file_foto->getClientOriginalExtension() == "gif") {
                if ($request->hasFile('file_foto')) {
                    $file = $request->file('file_foto');
                    $nama_file = time() . "_" . $file->getClientOriginalName();
                    $tujuan_upload = 'data_file/user/foto';
                    $file->move($tujuan_upload, $nama_file);
                } else {
                    $nama_file = "";
                }

                $newid = decrypt($id);
                // Update
                DB::table('users')->where('id', $newid)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'password' => bcrypt($request->password),
                    'role' => $request->cbrole,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'detail_address' => $request->desc,
                    'file_foto' => $nama_file,
                ]);

                Log_users::create([
                    'users_id' => auth()->user()->id,
                    'role' => auth()->user()->role,
                    'activity' => 'update data',
                    'description' => 'data updated',
                    'status' => 'success',
                    'mac_address' => '',
                ]);

                return redirect()->route("user.index")->with("info", "Data Users has been updated");
            } else {
                Log_users::create([
                    'users_id' => auth()->user()->id,
                    'role' => auth()->user()->role,
                    'activity' => 'update data',
                    'description' => 'error validation file format',
                    'status' => 'failed',
                    'mac_address' => '',
                ]);

                return back()->with("info", "Pastikan format file foto anda bertipe gambar");
            }
        } else {
            $newid = decrypt($id);
            // Update
            DB::table('users')->where('id', $newid)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),
                'role' => $request->cbrole,
                'phone' => $request->phone,
                'address' => $request->address,
                'detail_address' => $request->desc,
            ]);

            Log_users::create([
                'users_id' => auth()->user()->id,
                'role' => auth()->user()->role,
                'activity' => 'update data',
                'description' => 'data updated',
                'status' => 'success',
                'mac_address' => '',
            ]);

            return redirect()->route("user.index")->with("info", "Data Users has been updated");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd(
        //     $id,
        //     Crypt::decrypt($id),
        // );

        if (isset($id)) {
            try {
                $decrypted = decrypt($id);
                // Log
            } catch (DecryptException $e) {
                return view('error.e_throw', [
                    'e' => ["Invalid Data"],
                ]);
            }

            $newid = Crypt::decrypt($id);

            $delete = User::findOrFail($newid)
            ->where('id', '=', $newid);
            $delete->delete();

            Log_users::create([
                'users_id' => auth()->user()->id,
                'role' => auth()->user()->role,
                'activity' => 'delete data',
                'description' => 'data deleted',
                'status' => 'success',
                'mac_address' => '',
            ]);
        }

        return redirect()->route("user.index")->with("info", "Data Users has been deleted");
    }
}
