<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColumnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('columns')->insert([
            'title' => 'Column 1'
        ]);
        DB::table('columns')->insert([
            'title' => 'Column 2'
        ]);
        DB::table('columns')->insert([
            'title' => 'Column 3'
        ]);
    }
}
