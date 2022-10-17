<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        ]);
    }
}
