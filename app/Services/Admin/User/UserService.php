<?php

namespace App\Services\Admin\User;

use App\Models\Log_users;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

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
            throw new Exception('Terdapat data yang telah terdaftar pada sistem');
        }


        // Query insert dengan foto
        if((auth()->user()->isAdmin() || auth()->user()->isSuper()) && empty($cek[0])) {
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

    public function updateUser($request, $id)
    {
        $newid = decrypt($id);
        $data = $request->all();
        $cek_role = Roles::where("id", $request->cbrole)->get();
        $nama_file = "";

        // dd(
        //     $newid,
        //     $data,
        // );

        if ($request->hasFile("file_foto")) {
            if (filesize($request->file_foto) > 1000 * 10000) {
                Log_users::create([
                    "users_id" => auth()->user()->id,
                    "role" => auth()->user()->role,
                    "activity" => "update data",
                    "description" => "error validation file size",
                    "status" => "failed",
                    "mac_address" => "",
                ]);

                throw new Exception('File foto anda melebihi batas maksimal ukuran upload');
            }

            if (
                $request->file_foto->getClientOriginalExtension() == "jpg" ||
                $request->file_foto->getClientOriginalExtension() == "jpeg" ||
                $request->file_foto->getClientOriginalExtension() == "png" ||
                $request->file_foto->getClientOriginalExtension() == "gif"
            ) {
                if ($request->hasFile("file_foto")) {
                    $oldfile = User::CekFileFoto($newid)->get();
                    // dd(
                    //     $oldfile[0]->file_foto,
                    //     $oldfile[0],
                    //     empty($oldfile[0]->file_foto),
                    //     '/storage/data/image/user/'.$oldfile[0]->file_foto,
                    //     Storage::exists('data/image/user/1680859411_DSC_1675 4x6.jpg'),
                    //     Storage::exists('data/image/user/'.$oldfile[0]->file_foto),
                    //     !Storage::exists('data/image/user/'.$oldfile[0]->file_foto),
                    // );

                    if (!empty($oldfile[0]->file_foto)) {
                        if (Storage::exists("data/image/user/" . $oldfile[0]->file_foto)) {
                            Storage::delete("data/image/user/" . $oldfile[0]->file_foto);
                        }
                    }

                    $file = $request->file("file_foto");
                    $nama_file = time() . "_" . $file->getClientOriginalName();
                    $file->storeAs("/data/image/user/", $nama_file);
                } else {
                    $nama_file = "";
                }
            } else {
                Log_users::create([
                    "users_id" => auth()->user()->id,
                    "role" => auth()->user()->role,
                    "activity" => "update data",
                    "description" => "error validation file format",
                    "status" => "failed",
                    "mac_address" => "",
                ]);

                throw new Exception('Pastikan format file foto anda bertipe gambar');
            }
        }

        if((auth()->user()->isAdmin() || auth()->user()->isSuper())) {
            // Update
            $resultData = DB::table("users")
            ->where("id", $newid)
            ->update([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "password" => bcrypt($request->password),
                "roles_id" => $cek_role[0]->id,
                "role" => $cek_role[0]->name,
                "country" => $request->cbcountry,
                "province" => $request->cbprovince,
                "city" => $request->cbcity,
                "district" => $request->cbdistrict,
                "ward" => $request->cbward,
                "phone" => $request->phone,
                "address" => $request->address,
                "detail_address" => $request->desc,
                "file_foto" => $nama_file,
            ]);

            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "update data",
                "description" => "data updated",
                "status" => "success",
                "mac_address" => "",
            ]);

        } else {
            throw new Exception('Anda tidak memiliki hak akses untuk aksi tersebut');
        }

        return $resultData;

    }

    public function viewUser($id)
    {
        //
    }

    public function deleteUser($id)
    {
        if (isset($id)) {
            $newid = Crypt::decrypt($id);

            $resultData = User::findOrFail($newid)->where("id", "=", $newid);
            $resultData->delete();

            $oldfile = User::CekFileFoto($newid)->get();

            if (!empty($oldfile[0]->file_foto)) {
                if (
                    Storage::exists("data/image/user/" . $oldfile[0]->file_foto)
                ) {
                    Storage::delete(
                        "data/image/user/" . $oldfile[0]->file_foto
                    );
                }
            }

            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "delete data",
                "description" => "data deleted",
                "status" => "success",
                "mac_address" => "",
            ]);
        } else {
            throw new Exception('Data User tidak dapat ditemukan');
        }

        sleep(1);

        return $resultData;

    }

    public function deactiveUser($request)
    {
        $decrypted = decrypt($request->cbckuserid);
        $newid = Crypt::decrypt($request->cbckuserid);

        // dd(
        //     $request->all(),
        //     $decrypted,
        //     $newid,
        // );

        $resultData = DB::table("users")
        ->where("id", $newid)
        ->update([
            "status" => 2,
        ]);

        Log_users::create([
            "users_id" => auth()->user()->id,
            "role" => auth()->user()->role,
            "activity" => "change status",
            "description" => "data deactivated",
            "status" => "success",
            "mac_address" => "",
        ]);

        sleep(1);

        return $resultData;
    }

    public function activeUser($request)
    {
        $decrypted = decrypt($request->cbckuserid);
        $newid = Crypt::decrypt($request->cbckuserid);

        // dd(
        //     $request->all(),
        //     $decrypted,
        //     $newid,
        // );

        $resultData = DB::table("users")
        ->where("id", $newid)
        ->update([
            "status" => 1,
        ]);

        Log_users::create([
            "users_id" => auth()->user()->id,
            "role" => auth()->user()->role,
            "activity" => "change status",
            "description" => "data activated",
            "status" => "success",
            "mac_address" => "",
        ]);

        sleep(1);

        return $resultData;
    }
}
