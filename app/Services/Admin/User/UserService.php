<?php

namespace App\Services\Admin\User;

use App\Models\Log_users;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Exception;

class UserService
{
    public function storeUser($request)
    {
        // dd(
        //     $request->all(),
        //     $request->username,
        //     $request->email,
        //     $request->cbrole,
        // );

        // Cek Data
        $cek = User::cekUsername($request->username)
        ->cekEmail($request->email)
        ->get();

        $cekAdmin = Roles::RoleAdmin()
        ->get();

        $data = $request->all();
        $cek_role = Roles::where("id", $request->cbrole)->get();
        $nama_file = "";
        $resultData = "";

        // dd(
        //     $data,
        //     $cek_role,
        //     auth()->user()->id,
        //     ($nama_file != null) ? $nama_file : "",
        //     empty($cek[0]),
        //     $cekAdmin[0]->id,
        //     auth()->user()->role,
        //     auth()->user()->roles_id,
        //     // $request->hasFile("file_foto"),
        //     // $request->hasFile("file_foto") == "",
        // );

        if (empty($cek[0])) {
            if ($request->hasFile("file_foto")) {
                if (filesize($request->file_foto) > 1000 * 10000) {
                    // return back()->with(
                    //     "info",
                    //     "File foto anda melebihi batas maksimal ukuran upload"
                    // );
                    throw new Exception('File foto anda melebihi batas maksimal ukuran upload');

                }
                if ($request->file_foto->getClientOriginalExtension() == "jpg" ||
                    $request->file_foto->getClientOriginalExtension() == "jpeg" ||
                    $request->file_foto->getClientOriginalExtension() == "png" ||
                    $request->file_foto->getClientOriginalExtension() == "gif"
                ) {
                    if ($request->hasFile("file_foto")) {
                        $file = $request->file("file_foto");
                        $nama_file =
                            time() . "_" . $file->getClientOriginalName();
                        $file->storeAs("/data/image/user/", $nama_file);

                        $request->file_foto = $nama_file;
                    } else {
                        $nama_file = "";
                    }
                } else {
                    // return back()->with(
                    //     "info",
                    //     "Pastikan format file foto anda bertipe gambar"
                    // );
                    throw new Exception('Pastikan format file foto anda bertipe gambar');
                }
            }
        } else {
            // Log user duplicated
            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "insert Data",
                "description" => "duplicated entity",
                "status" => "failed",
                "mac_address" => "",
            ]);

            // return back()->with(
            //     "info",
            //     "Terdapat data yang telah terdaftar pada sistem"
            // );
            throw new Exception('Terdapat data yang telah terdaftar pada sistem');
        }


        // Query insert dengan foto
        if(auth()->user()->roles_id == $cekAdmin[0]->id && empty($cek[0])) {
            $resultData = User::create([
                "first_name" => $data["first_name"],
                "last_name" => $data["last_name"],
                "username" => $data["username"],
                "email" => $data["email"],
                "password" => bcrypt($data["password"]),
                "roles_id" => $cek_role[0]->id,
                "role" => $cek_role[0]->name,
                "status" => 2,
                "country" => 1,
                "province" => $data["cbprovince"],
                "city" => $data["cbcity"],
                "district" => $data["cbdistrict"],
                "ward" => $data["cbward"],
                "phone" => $data["phone"],
                "address" => $data["address"],
                "detail_address" => $data["address"],
                // "file_foto" => ($nama_file != null) ? $nama_file : "",
                "file_foto" => ($request->file_foto != null) ? $request->file_foto : "",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            // Log
            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "insert Data",
                "description" => "data saved",
                "status" => "success",
                "mac_address" => "",
            ]);
        } else {
            throw new Exception('Anda tidak memiliki hak akses untuk aksi tersebut');
        }

        return $resultData;

    }

    public function updateUser($request)
    {
        //
    }

    public function viewUser($id)
    {
        //
    }
}
