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
        $this->call(ChangeLogAdjustSeeder::class);
        $this->call(ChangeLogErrorSeeder::class);
        $this->call(ChangeLogWarningSeeder::class);
        $this->call(ChangeLogUpdateSeeder::class);
    }
}
