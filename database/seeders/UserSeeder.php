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
            'phone'=> '08123128327',
            'address'=> 'Jl. Manukan Lor, Surabaya',
            'detail_address'=> 'Paling pojok pager warna putih',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'first_name'=> 'Clara Devinda Jaya',
            'last_name'=>  'Sutrisna',
            'username'=> 'claradevinda',
            'email'=> 'clara@gmail.com',
            'password' => bcrypt('claradevinda'),
            'role'=> 'admin',
            'phone'=> '08123128327',
            'address'=> 'Jl. Jalan Jalan, Surabaya',
            'detail_address'=> 'Paling pojok pager warna putih',
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
            'phone'=> '08123128327',
            'address'=> 'Jl. Manukan Lor Keuangan, Surabaya',
            'detail_address'=> 'Paling pojok pager warna hijau keuangan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
