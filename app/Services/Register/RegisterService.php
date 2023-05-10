<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class RegisterService
{
    public function storeRegister($request)
    {
        $data = $request->all();

        dd(
            $data,
        );

        // $data['first_name'] = Str::limit($data['first_name'], 10);

        $saveData = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['cbrole'],
            'status' => 2,
            'country' => $data['cbcountry'],
            'province' => $data['cbprovince'],
            'city' => $data['cbcity'],
            'district' => $data['cbdistrict'],
            'ward' => $data['cbward'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'detail_address' => $data['desc'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return $saveData;

    }
}
