<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeLogWarningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Warning
        // DB::table('change_logs')->insert([
        //     'title' => "test change log beta",
        //     'users_id' => "1",
        //     'type' => "warning",
        //     'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
        //     'version' => "Beta 0.0.0.3",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        DB::table('change_logs')->insert([
            'title' => "add feature",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add unfinished feature and some error on it",
            'version' => "v.0.0.0.2",
            'created_at' => "2022-11-22",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add feature",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add unfinished feature and some error on it",
            'version' => "v.0.0.0.2",
            'created_at' => "2022-11-23",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge localization",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge localization",
            'version' => "v.1.0.0.3",
            'created_at' => "2023-06-08",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge route",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge route",
            'version' => "v.1.0.0.3",
            'created_at' => "2023-06-09",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge pricing page",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge pricing page",
            'version' => "v.1.0.0.3",
            'created_at' => "2023-06-10",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.1.0.3",
            'created_at' => "2023-06-11",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-15",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-16",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-17",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-18",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-19",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-20",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-21",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.2.0.4",
            'created_at' => "2023-06-22",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add merge all branch",
            'users_id' => "1",
            'type' => "warning",
            'description' => "add merge all branch",
            'version' => "v.1.1.0.7",
            'created_at' => "2023-06-15",
            'updated_at' => Carbon::now(),
        ]);

    }
}
