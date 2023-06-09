<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeLogUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Update
        // DB::table('change_logs')->insert([
        //     'title' => "test change log beta",
        //     'users_id' => "1",
        //     'type' => "update",
        //     'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
        //     'version' => "Beta 0.0.0.1",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        DB::table('change_logs')->insert([
            'title' => "update dark mode",
            'users_id' => "1",
            'type' => "update",
            'description' => "update dark mode",
            'version' => "v.0.0.0.5",
            'created_at' => "2023-03-28",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "update dark mode",
            'users_id' => "1",
            'type' => "update",
            'description' => "update dark mode rev",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-03-31",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "fix the error",
            'users_id' => "1",
            'type' => "update",
            'description' => "fix the error",
            'version' => "v.0.0.0.2",
            'created_at' => "2022-11-24",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "update new login",
            'users_id' => "1",
            'type' => "update",
            'description' => "update new login",
            'version' => "v.0.0.0.3",
            'created_at' => "2023-03-15",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "update new reset page",
            'users_id' => "1",
            'type' => "update",
            'description' => "update new reset page",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-16",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add captcha login",
            'users_id' => "1",
            'type' => "update",
            'description' => "add captcha login",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-17",
            'updated_at' => Carbon::now(),
        ]);

    }
}
