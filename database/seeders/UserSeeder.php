<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=> 'Dimaz Ivan',
            'last_name'=>  'Perdana',
            'username'=> 'dimazivan',
            'email'=> 'dimaz@gmail.com',
            'password' => bcrypt('dimazivan'),
            'role'=> 'admin',
            'status'=> '1',
            'phone'=> '08123128327',
            'address'=> 'Jl. Manukan Lor',
            'district' =>'3578150',
            'ward' =>'3578150011',
            'city' =>'3578',
            'province' =>'35',
            'country' =>'1',
            'detail_address'=> 'Paling pojok pager warna putih',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name'=> 'Dimaz',
            'last_name'=>  'admin',
            'username'=> 'dimazadmin',
            'email'=> 'dimaz123@gmail.com',
            'password' => bcrypt('dimazivan'),
            'role'=> 'admin',
            'status'=> '1',
            'phone'=> '08123128327',
            'address'=> 'Jl. Manukan Lor Keuangan',
            'district' =>'3578150',
            'ward' =>'3578150011',
            'city' =>'3578',
            'province' =>'35',
            'country' =>'1',
            'detail_address'=> 'Paling pojok pager warna hijau keuangan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name'=> 'User',
            'last_name'=>  'testing',
            'username'=> 'testinguser',
            'email'=> 'dima13123z123@gmail.com',
            'password' => bcrypt('dimazivan'),
            'role'=> 'admin',
            'status'=> '2',
            'phone'=> '081234567811',
            'address'=> 'Jl. Manukan Lor Keuangan',
            'district' =>'3578150',
            'ward' =>'3578150011',
            'city' =>'3578',
            'province' =>'35',
            'country' =>'1',
            'detail_address'=> 'Paling pojok pager warna hijau keuangan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name'=> 'Dimaz Ivan',
            'last_name'=>  'keuangan',
            'username'=> 'dimazkeuangan',
            'email'=> 'dimaz12@gmail.com',
            'password' => bcrypt('dimazivan'),
            'role'=> 'keuangan',
            'status'=> '1',
            'phone'=> '08123128327',
            'address'=> 'Jl. Manukan Lor Keuangan',
            'district' =>'3578150',
            'ward' =>'3578150011',
            'city' =>'3578',
            'province' =>'35',
            'country' =>'1',
            'detail_address'=> 'Paling pojok pager warna hijau keuangan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
