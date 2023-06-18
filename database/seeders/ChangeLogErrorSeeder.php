<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeLogErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Error
        DB::table('change_logs')->insert([
            'title' => "some feature may be error",
            'users_id' => "1",
            'type' => "error",
            'description' => "some feature may be error",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-04-13",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "error some new sub",
            'users_id' => "1",
            'type' => "error",
            'description' => "error some new sub",
            'version' => "v.1.0.0.2",
            'created_at' => "2023-06-04",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "error on some localization",
            'users_id' => "1",
            'type' => "error",
            'description' => "error on some localization",
            'version' => "v.1.1.0.3",
            'created_at' => "2023-06-12",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "error on some change services",
            'users_id' => "1",
            'type' => "error",
            'description' => "error on some change services wait for next update",
            'version' => "v.1.1.0.7",
            'created_at' => "2023-06-17",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "error on some change services",
            'users_id' => "1",
            'type' => "error",
            'description' => "error on some change services wait for next update",
            'version' => "v.1.1.0.7",
            'created_at' => "2023-06-18",
            'updated_at' => Carbon::now(),
        ]);

    }
}
