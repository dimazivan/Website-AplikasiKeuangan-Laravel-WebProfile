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
    }
}
