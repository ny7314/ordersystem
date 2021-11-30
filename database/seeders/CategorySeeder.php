<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'セットメニュー',
                'sort_order' => 1,
            ],
            [
                'name' => '松花堂',
                'sort_order' => 2,
            ],
            [
                'name' => '住職弁当',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '花巻',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '対馬',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => '輪島',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => '春の御膳',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => '夏の御膳',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => '秋冬御膳',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
        ]);
    }
}
