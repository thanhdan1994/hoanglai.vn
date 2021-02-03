<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_type')->insert([
            'name' => 'TIN TỨC',
            'slug' => 'tin-tuc-cong-nghe',
            'title' => 'TIN TỨC CÔNG NGHỆ',
            'logo' => env('APP_URL') . '/img/articles/news-logo.png'
        ]);

        DB::table('article_type')->insert([
            'name' => 'DỊCH VỤ',
            'slug' => 'dich-vu-sua-may-in-may-photocopy-tan-noi-tai-tphcm',
            'title' => 'DỊCH VỤ CỦA CHÚNG TÔI',
            'logo' => env('APP_URL') . '/img/articles/news-logo.png'
        ]);

        DB::table('article_type')->insert([
            'name' => 'SỰ CỐ MÁY IN - MÁY PHOTOCOPY',
            'slug' => 'su-co-may-in-may-photocopy-thuong-gap',
            'title' => 'SỰ CỐ THƯỜNG GẶP',
            'logo' => env('APP_URL') . '/img/articles/news-logo.png'
        ]);
    }
}
