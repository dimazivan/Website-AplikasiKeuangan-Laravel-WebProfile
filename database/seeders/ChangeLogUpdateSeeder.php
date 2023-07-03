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

        DB::table('change_logs')->insert([
            'title' => "add API End Point",
            'users_id' => "1",
            'type' => "update",
            'description' => "add API Laravel",
            'version' => "v.0.0.0.7",
            'created_at' => "2023-04-26",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add API End Point",
            'users_id' => "1",
            'type' => "update",
            'description' => "add API Laravel ft VUE js",
            'version' => "v.0.0.0.8",
            'created_at' => "2023-04-29",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "Change Auth API with sanctum",
            'users_id' => "1",
            'type' => "update",
            'description' => "add API Laravel ft VUE js",
            'version' => "v.0.0.0.9",
            'created_at' => "2023-05-21",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "Add new change log",
            'users_id' => "1",
            'type' => "update",
            'description' => "add change log views",
            'version' => "v.0.0.0.10",
            'created_at' => "2023-05-25",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "Add front end",
            'users_id' => "1",
            'type' => "update",
            'description' => "add front end",
            'version' => "v.1.0.0.1",
            'created_at' => "2023-05-27",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "Add translator localization",
            'users_id' => "1",
            'type' => "update",
            'description' => "add translator localization",
            'version' => "v.1.0.0.2",
            'created_at' => "2023-06-01",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add pricing page",
            'users_id' => "1",
            'type' => "update",
            'description' => "add pricing page",
            'version' => "v.1.0.0.3",
            'created_at' => "2023-06-07",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "fixing error",
            'users_id' => "1",
            'type' => "update",
            'description' => "fixing error on some localization",
            'version' => "v.1.1.0.4",
            'created_at' => "2023-06-13",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add footer",
            'users_id' => "1",
            'type' => "update",
            'description' => "add footer",
            'version' => "v.1.1.0.5",
            'created_at' => "2023-06-14",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add footer sub",
            'users_id' => "1",
            'type' => "update",
            'description' => "add sub",
            'version' => "v.1.1.0.6",
            'created_at' => "2023-06-15",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add services",
            'users_id' => "1",
            'type' => "update",
            'description' => "add user services",
            'version' => "v.1.1.0.8",
            'created_at' => "2023-06-21",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add services",
            'users_id' => "1",
            'type' => "update",
            'description' => "add user services v2",
            'version' => "v.1.1.0.9",
            'created_at' => "2023-07-03",
            'updated_at' => Carbon::now(),
        ]);

    }
}
