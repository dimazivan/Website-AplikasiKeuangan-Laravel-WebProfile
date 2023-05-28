<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'title'=> 'Aplikasi E-Commerce berbasis website.',
            'date'=> '2022-11-01',
            'status'=> 'public',
            'type'=> 'fs',
            'feature'=> 'Penjualan Produk,Penjualan Custom,Cart,Produksi,Dashboard,API,Eksport,Authentication,Enkripsi',
            'description'=> 'Aplikasi carry and production progress tracking berbasis website menggunakan metode edd (studi kasus: UMKM sablon direct to film (dtf) elite madiun) 
            merupakan aplikasi yang digunakan sebagai media penjualan secara online bagi UMKM sablon sejenis, dimana nantinya pelanggan dapat melakukan pemesanan produk yang dijual 
            dan juga dapat melakukan pemesanan secara custom berdasarkan permintaan desain yang diminta oleh pelanggan, aplikasi ini juga memiliki fitur tracking progress produksi 
            dimana fitur ini berfungsi sebagai pelacakan kemajuan dari proses produksi terhadap transaksi yang dilakukan oleh pelanggan.',
            'github'=> 'https://github.com/dimazivan/Website-Ecommerce-Laravel',
            'images'=> 'login_ecommerce.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'title'=> 'Aplikasi Keuangan dan Web Profile.',
            'date'=> '2022-12-01',
            'status'=> 'public',
            'type'=> 'fs',
            'feature'=> 'Data Master,Dashboard,API,Eksport,Authentication,Enkripsi,Mail Sender,Dll',
            'description'=> 'Aplikasi keuangan dan dashboard yang berisi tentang Data Master, API, dan juga hal yang menarik lainnya',
            'github'=> 'https://github.com/dimazivan/Website-AplikasiKeuangan-Laravel-WebProfile',
            'images'=> 'dashboard.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
