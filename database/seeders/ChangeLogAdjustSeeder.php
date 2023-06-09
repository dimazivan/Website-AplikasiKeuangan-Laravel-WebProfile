<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeLogAdjustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adjust
        // DB::table('change_logs')->insert([
        //     'title' => "test change log beta",
        //     'users_id' => "1",
        //     'type' => "adjust",
        //     'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
        //     'version' => "Beta 0.0.0.4",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        DB::table('change_logs')->insert([
            'title' => "add some code",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "add some code",
            'version' => "v.0.0.0.2",
            'created_at' => "2022-11-25",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add some code",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "add some code",
            'version' => "v.0.0.0.2",
            'created_at' => "2023-03-09",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add some code",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "add some code",
            'version' => "v.0.0.0.2",
            'created_at' => "2023-03-12",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "add some code",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "add some code",
            'version' => "v.0.0.0.2",
            'created_at' => "2023-03-14",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-18",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-19",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "adjust some feature",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "adjust some feature",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-20",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-21",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-22",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-23",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-24",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-25",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.4",
            'created_at' => "2023-03-26",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.5",
            'created_at' => "2023-03-30",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-04-01",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-04-02",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-04-03",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-04-04",
            'updated_at' => Carbon::now(),
        ]);

        DB::table('change_logs')->insert([
            'title' => "commit",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "commit",
            'version' => "v.0.0.0.6",
            'created_at' => "2023-04-05",
            'updated_at' => Carbon::now(),
        ]);

    }
}
