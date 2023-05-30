<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Detail_projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_projects')->insert([
            'projects_id'=> '1',
            'language'=> 'laravel',
            'color'=> '#902722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '1',
            'language'=> 'php',
            'color'=> '#4f5b93',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '1',
            'language'=> 'bootstrap',
            'color'=> '#7b12f5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '2',
            'language'=> 'laravel',
            'color'=> '#902722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '2',
            'language'=> 'php',
            'color'=> '#4f5b93',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '2',
            'language'=> 'bootstrap',
            'color'=> '#7b12f5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '3',
            'language'=> 'laravel',
            'color'=> '#902722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '3',
            'language'=> 'php',
            'color'=> '#4f5b93',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '3',
            'language'=> 'bootstrap',
            'color'=> '#7b12f5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '4',
            'language'=> 'laravel',
            'color'=> '#902722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '4',
            'language'=> 'php',
            'color'=> '#4f5b93',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '4',
            'language'=> 'bootstrap',
            'color'=> '#7b12f5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '5',
            'language'=> 'php',
            'color'=> '#4f5b93',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '5',
            'language'=> 'bootstrap',
            'color'=> '#7b12f5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '6',
            'language'=> 'laravel',
            'color'=> '#902722',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '6',
            'language'=> 'php',
            'color'=> '#4f5b93',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_projects')->insert([
            'projects_id'=> '6',
            'language'=> 'bootstrap',
            'color'=> '#7b12f5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
