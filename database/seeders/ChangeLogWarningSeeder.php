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

    }
}
