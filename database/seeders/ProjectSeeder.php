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
            'description'=> 'Aplikasi keuangan dan dashboard yang berisi tentang Data Master, API, dan juga hal yang menarik lainnya.',
            'github'=> 'https://github.com/dimazivan/Website-AplikasiKeuangan-Laravel-WebProfile',
            'images'=> 'dashboard.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'title'=> 'SPK Pemilihan Perumahan Metode AHP',
            'date'=> '2020-03-01',
            'status'=> 'public',
            'type'=> 'fs',
            'feature'=> 'Data Master,Dashboard,Eksport,SPK Method,Dll',
            'description'=> 'Sistem pendukung keputusan berbasis website yang menggunakan tampilan bootstrap dan framework laravel, siap membantu anda dalam melakukan pengambilan keputusan.',
            'github'=> 'https://github.com/dimazivan/Website-SPK-AHP-Laravel',
            'images'=> 'SPK_AHP.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'title'=> 'Aplikasi Penjualan dan Pemesanan Produk pada UMKM HawaaMoeslemWear berbasis website.',
            'date'=> '2021-04-01',
            'status'=> 'public',
            'type'=> 'fs',
            'feature'=> 'Penjualan Produk,Penjualan Custom,Cart,Produksi,Dashboard,Eksport,Authentication,Enkripsi',
            'description'=> 'Develop single web store for UMKM HawaaMoeslemWear (framework laravel) (2021), Develop and customize web project like feature, module, appearance, template that relate about ecommerce, but several feature like payment gateway, chatting or feedback not include in it and also maintenance testing during development. noted: this is single store webstore.',
            'github'=> 'https://github.com/dimazivan/Website-HawaaMoeslemWear-Laravel',
            'images'=> 'Hawaa_Store.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'title'=> 'Aplikasi Penjualan dan Pemesanan Produk Toko Roti Berbasis Website',
            'date'=> '2020-01-01',
            'status'=> 'public',
            'type'=> 'fs',
            'feature'=> 'Penjualan Produk,Dashboard,Authentication,Enkripsi',
            'description'=> 'Aplikasi Jual Beli Perusahaan Toko KUE',
            'github'=> 'https://github.com/dimazivan/Website-TokoRoti-Native',
            'images'=> 'tokoroti_native.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'title'=> 'Aplikasi Penjualan dan Pemesanan Produk Toko Roti Berbasis Website',
            'date'=> '2020-05-01',
            'status'=> 'public',
            'type'=> 'fs',
            'feature'=> 'Penjualan Produk,Dashboard,Eksport,Authentication,Enkripsi',
            'description'=> 'Aplikasi Jual Beli Perusahaan Toko KUE.',
            'github'=> 'https://github.com/dimazivan/Website-TokoRoti-Laravel',
            'images'=> 'toko_roti.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        for ($i=0; $i < 100; $i++) {
            DB::table('projects')->insert([
                'title'=> 'Dummy Project'.$i,
                'date'=> '2018-01-01',
                'status'=> 'public',
                'type'=> 'fs',
                'feature'=> 'Data Dummy ke'.$i,
                'description'=> 'Aplikasi Dummy. ke'.$i,
                'github'=> '#',
                'images'=> 'dummy.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        }
    }
}
