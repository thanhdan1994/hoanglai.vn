<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'MÁY IN',
        ]);

        DB::table('categories')->insert([
            'name' => 'MÁY PHOTOCOPY',
        ]);

        DB::table('categories')->insert([
            'name' => 'HỘP MỰC MÁY IN',
        ]);
    }
}
