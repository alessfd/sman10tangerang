<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_post')->insert( [
            [
                'category_id' => '1',
                'post_id' => '1',
            ],
            [
                'category_id' => '2',
                'post_id' => '2',
            ],
            [
                'category_id' => '3',
                'post_id' => '3',
            ],
        ]);
    }
}
