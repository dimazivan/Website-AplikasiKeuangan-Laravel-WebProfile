<?php

namespace App\Services\Register;

use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;

class RegisterService
{
    public function storeRegister($request)
    {
        $data = $request->all();

        $cek_role = Roles::where('id', $request->cbrole)->get();

        // dd(
        //     $data,
        // );

        // $data['first_name'] = Str::limit($data['first_name'], 10);

        $saveData = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'roles_id' => $cek_role[0]->id,
            'role' => $cek_role[0]->name,
            'status' => 2,
            'country' => 1,
            // 'country' => $data['cbcountry'],
            'province' => $data['cbprovince'],
            'city' => $data['cbcity'],
            'district' => $data['cbdistrict'],
            'ward' => $data['cbward'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'detail_address' => $data['address'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return $saveData;

    }
}
