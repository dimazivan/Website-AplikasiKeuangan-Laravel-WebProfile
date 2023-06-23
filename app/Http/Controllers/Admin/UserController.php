<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Services\Admin\User\UserService;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Log_users;
use App\Models\Roles;
use Carbon\Carbon;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $title = "Halaman Data User";
        $data_user = User::all();
        $jml_role = User::Role()->count();

        // $data_user = Cache::remember('data', 1, function () {
        //     return User::with('roles')
        //     // return DB::table('users')
        //     ->select(
        //         'users.id',
        //         'users.username',
        //         'users.first_name',
        //         'users.last_name',
        //         'users.role as role',
        //         'users.status',
        //     )
        //     ->get();
        // });

        // $exists = Storage::url('data/image/user/'.auth()->user()->file_foto);
        // $test = Storage::get('/app/data/image/user/'.auth()->user()->file_foto);

        // dd(
        //     $jml_role,
        //     $data_user,
        // );

        return view("admin.pages.user.data_user", [
            "title" => $title,
            "data_user" => $data_user,
        ]);
    }

    public function cekId($id)
    {
        if (isset($id)) {
            try {
                $decrypted = decrypt($id);
                // Log
            } catch (DecryptException $e) {
                return view("error.e_throw", [
                    "e" => ["Invalid Data"],
                ]);
            }

            $newid = Crypt::decrypt($id);

            $cekid = User::where("id", $newid)->get();

            // dd(
            //     $id,
            //     $cekid,
            // );

            return json_encode($cekid);
        }
    }

    public function cekUsername($username)
    {
        $cekusername = User::CekUsername($username)->pluck("username");

        // dd(
        //     $cekusername
        // );

        return json_encode($cekusername);
    }

    public function cekEmail($email)
    {
        $cekemail = User::CekEmail($email)->pluck("email");

        // dd(
        //     $cekemail
        // );

        return json_encode($cekemail);
    }

    public function deactiveUser(Request $request)
    {
        if (!empty($request->cbckuserid)) {
            try {
                $decrypted = decrypt($request->cbckuserid);
                // Log
            } catch (DecryptException $e) {
                return view("error.e_throw", [
                    "e" => ["Invalid Data"],
                ]);
            }

            dd($request->all(), $decrypted);
        } else {
            return view("error.404");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Halaman Data User";
        $roles = Roles::all();
        $province = Province::orderBy("name", "asc")->pluck("name", "id");

        // dd(
        //     $province,
        // );

        return view(
            "admin.pages.user.add_user",
            [
                "title" => $title,
                "roles" => $roles,
            ],
            compact("province")
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $validator = $request->validated();

        // dd(
        //     $request->all(),
        //     $validator,
        //     !$validator,
        // );

        if (!$validator) {
            // Log user error validation
            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "insert Data",
                "description" => "error validation",
                "status" => "failed",
                "mac_address" => "",
            ]);

            return back()->withErrors($validator->errors());
        }

        try {
            $this->userService->storeUser($request);
            return redirect()
                ->route("user.index")
                ->with("info", "Data Users has been saved");
        } catch (\Exception $e) {
            //throw $e
            // dd(
            //     $e,
            // );
            return back()->with("info", $e->getMessage());
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
                return view("error.e_throw", [
                    "e" => ["Invalid Data"],
                ]);
            }

            $newid = Crypt::decrypt($id);
            $data = User::where("id", $newid)->get();

            $datalog = Log_users::where("users_id", $newid)->get();

            // dd(
            //     $data,
            //     $id,
            //     $newid,
            //     $data[0],
            //     $datalog,
            // );

            if (empty($data[0])) {
                return view("error.404");
            }

            return view("admin.pages.profile.profile", [
                "title" => $title,
                "data" => $data,
                "datalog" => $datalog,
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
        $province = Province::orderBy("name", "asc")->pluck("name", "id");
        $roles = Roles::all();

        try {
            $decrypted = decrypt($id);
            // Log
        } catch (DecryptException $e) {
            return view("error.e_throw", [
                "e" => ["Invalid Data"],
            ]);
        }

        // dd(
        //     $id,
        //     Crypt::decrypt($id),
        //     isset($id),
        // );

        if (isset($id)) {
            $newid = Crypt::decrypt($id);

            $data = User::where("id", $newid)->get();

            // dd(
            //     $data,
            // );

            if (empty($data[0])) {
                return view("error.404");
            }

            return view(
                "admin.pages.user.edit_user",
                [
                    "title" => $title,
                    "data" => $data,
                    "roles" => $roles,
                ],
                compact("province")
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserStoreRequest $request, $id)
    {
        try {
            $decrypted = decrypt($request->id_user);
            // Log
        } catch (DecryptException $e) {
            return view("error.e_throw", [
                "e" => ["Invalid Data"],
            ]);
        }

        $newid = decrypt($id);

        $validator = $request->validated();

        // dd(
        //     $request->all(),
        //     $id,
        //     strlen($id),
        //     decrypt($id),
        //     decrypt($request->id_user),
        // );

        if (!$validator) {
            // Log
            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "update data",
                "description" => "error validation",
                "status" => "failed",
                "mac_address" => "",
            ]);
            return back()->withErrors($validator->errors());
        }

        $cek_role = Roles::where("id", $request->cbrole)->get();

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

                return back()->with(
                    "info",
                    "File foto anda melebihi batas maksimal ukuran upload"
                );
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
                        if (
                            Storage::exists(
                                "data/image/user/" . $oldfile[0]->file_foto
                            )
                        ) {
                            Storage::delete(
                                "data/image/user/" . $oldfile[0]->file_foto
                            );
                        }
                    }

                    $file = $request->file("file_foto");
                    $nama_file = time() . "_" . $file->getClientOriginalName();
                    $file->storeAs("/data/image/user/", $nama_file);
                } else {
                    $nama_file = "";
                }

                // Update
                DB::table("users")
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

                return redirect()
                    ->route("user.index")
                    ->with("info", "Data Users has been updated");
            } else {
                Log_users::create([
                    "users_id" => auth()->user()->id,
                    "role" => auth()->user()->role,
                    "activity" => "update data",
                    "description" => "error validation file format",
                    "status" => "failed",
                    "mac_address" => "",
                ]);

                return back()->with(
                    "info",
                    "Pastikan format file foto anda bertipe gambar"
                );
            }
        } else {
            $newid = decrypt($id);
            // Update
            DB::table("users")
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
                ]);

            Log_users::create([
                "users_id" => auth()->user()->id,
                "role" => auth()->user()->role,
                "activity" => "update data",
                "description" => "data updated",
                "status" => "success",
                "mac_address" => "",
            ]);

            return redirect()
                ->route("user.index")
                ->with("info", "Data Users has been updated");
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
                return view("error.e_throw", [
                    "e" => ["Invalid Data"],
                ]);
            }

            $newid = Crypt::decrypt($id);

            $delete = User::findOrFail($newid)->where("id", "=", $newid);
            $delete->delete();

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
        }

        sleep(3);

        return redirect()
            ->route("user.index")
            ->with("info", "Data Users has been deleted");
    }
}
