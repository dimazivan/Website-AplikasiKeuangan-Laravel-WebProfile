<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\Roles;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        $waktu = Carbon::now();

        $validator = Validator::make($request->all(), [
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
            'phone' => 'required|numeric|digits_between:10,13',
            'address' => 'required|max:255',
            'desc' => 'max:255|nullable',
            'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000|nullable',
        ]);

        // if (!$validator) {
        if($validator->fails()) {
            return response()->json($validator->errors());
        }

        // Cek Data
        $cek = User::cekUsername($request->username)
        ->cekEmail($request->email)
        ->get();

        $cek_role = Roles::where('id', $request->cbrole)->get();

        if (empty($cek[0])) {
            if ($request->hasFile('file_foto')) {
                if (filesize($request->file_foto) > 1000 * 10000) {
                    //failed save to database
                    return response()->json([
                        'success' => false,
                        'message' => 'Fotone Kegedean mas e',
                    ], 409);
                }

                if ($request->file_foto->getClientOriginalExtension() == "jpg" ||
                $request->file_foto->getClientOriginalExtension() == "jpeg" ||
                $request->file_foto->getClientOriginalExtension() == "png" ||
                $request->file_foto->getClientOriginalExtension() == "gif") {
                    if ($request->hasFile('file_foto')) {
                        $file = $request->file('file_foto');
                        $nama_file = time() . "_" . $file->getClientOriginalName();
                        $file->storeAs('/data/image/user/', $nama_file);
                    } else {
                        $nama_file = "";
                    }

                    // Query insert dengan foto
                    $user = User::create([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'username' => $request->username,
                        'email' => $request->email,
                        'roles_id' => $cek_role[0]->id,
                        'role' => $cek_role[0]->name,
                        'status' => 2,
                        'country' => $request->cbcountry,
                        'province' => $request->cbprovince,
                        'city' => $request->cbcity,
                        'district' => $request->cbdistrict,
                        'ward' => $request->cbward,
                        'phone' => $request->phone,
                        'address' => $request->address,
                        'detail_address' => $request->desc,
                        'password' => bcrypt($request->password),
                        'file_foto' => $nama_file,
                        'created_at' => $waktu,
                        'updated_at' => $waktu,
                    ]);
                } else {
                    //failed save to database
                    return response()->json([
                        'success' => false,
                        'message' => 'Format file foto e di cek maneh mas e',
                    ], 409);
                }
            } else {
                // Query insert tanpa foto
                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'roles_id' => $cek_role[0]->id,
                    'role' => $cek_role[0]->name,
                    'status' => 2,
                    'country' => $request->cbcountry,
                    'province' => $request->cbprovince,
                    'city' => $request->cbcity,
                    'district' => $request->cbdistrict,
                    'ward' => $request->cbward,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'detail_address' => $request->desc,
                    'password' => bcrypt($request->password),
                    'created_at' => $waktu,
                    'updated_at' => $waktu,
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Kembar wes kesimpen mas e',
            ], 409);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
    }

    public function login(Request $request)
    {
        // if (!Auth::attempt($request->only('email', 'password'))) {
        if (!Auth::attempt($request->only('username', 'password'))) {
            return response()
            ->json([
                'success'   => false,
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        // if(Auth::check()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Wes login ya login maneh',
        //     ], 401);
        // }

        // $user = User::where('email', $request['email'])->firstOrFail();
        $user = User::where('users.username', $request['username'])
        ->join('roles', 'roles.id', 'users.roles_id')
        ->firstOrFail();

        // dd(
        //     $user,
        // );

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'success' => true,
                'message' => 'Hi '.$user->first_name.', welcome to home',
                'role' => $user->name,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
    }

    public function cek_login()
    {
        if(Auth::check()) {
            // auth()->guard('web')->logout();
            // dd(
            //     auth(),
            //     auth()->user(),
            // );

            return response()->json([
                'success' => false,
                'message' => 'Wes login ya login maneh',
            ], 401);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Kosong mas gas',
            ], 200);
        }
    }

    // method for user logout and delete token
    public function logout()
    {
        // dd(
        //     auth()->user()->tokens()->delete(),
        //     auth()->user()->delete(),
        //     auth()->check(),
        //     Auth::check(),
        //     Auth::user(),
        // );

        if(Auth::check()) {
            auth()->user()->tokens()->delete();
            auth()->user()->delete();

            return [
                'message' => 'You have successfully logged out and the token was successfully deleted'
            ];
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Kosong mas gas',
            ], 200);
        }


    }
}
