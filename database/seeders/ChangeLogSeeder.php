<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('change_logs')->insert([
            'title' => "test change log beta",
            'users_id' => "1",
            'type' => "update",
            'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
            'version' => "Beta 0.0.0.1",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('change_logs')->insert([
            'title' => "test change log beta",
            'users_id' => "1",
            'type' => "error",
            'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
            'version' => "Beta 0.0.0.2",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('change_logs')->insert([
            'title' => "test change log beta",
            'users_id' => "1",
            'type' => "warning",
            'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
            'version' => "Beta 0.0.0.3",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('change_logs')->insert([
            'title' => "test change log beta",
            'users_id' => "1",
            'type' => "adjust",
            'description' => "Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.",
            'version' => "Beta 0.0.0.4",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
