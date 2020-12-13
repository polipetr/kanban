<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'title' => 'Create Database',
            'description' => 'You need to create database',
            'column_id' => 1
        ]);
        DB::table('cards')->insert([
            'title' => 'Export database',
            'description' => 'You need to export database',
            'column_id' => 1
        ]);
        DB::table('cards')->insert([
            'title' => 'Create modal fo',
            'description' => 'Create modal winwdow for showing the data in the pop up',
            'column_id' => 3
        ]);
    }
}
