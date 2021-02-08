<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Hoàng Nhân',
            'email' => 'hoangnhan1890@gmail.com',
            'password' => bcrypt('0909144005'),
        ]);
        // \App\Models\User::factory(10)->create();
        $this->call([
            VendorSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            CartridgeSeeder::class,
            PhotocopySeeder::class,
            ArticleTypeSeeder::class,
            NewsSeeder::class,
            SuLySuCoSeeder::class,
            ServiceSeeder::class,
            ProductRentSeeder::class,
        ]);
    }
}
