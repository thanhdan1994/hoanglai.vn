<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            'name' => 'HP',
            'logo' => env('APP_URL') .  '/img/brand/hp-logo.jpg',
        ]);

        DB::table('vendors')->insert([
            'name' => 'CANON',
            'logo' => env('APP_URL') .  '/img/brand/canon-logo.jpg',
        ]);

        DB::table('vendors')->insert([
            'name' => 'XEROX',
            'logo' => env('APP_URL') .  '/img/brand/xerox-logo.jpg',
        ]);

        DB::table('vendors')->insert([
            'name' => 'BROTHER',
            'logo' => env('APP_URL') .  '/img/brand/brother-logo.jpg',
        ]);
    }
}
