<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert( [
            [
                'title' => 'Technology',
                'slug' => 'technology',
            ],
            [
                'title' => 'Education',
                'slug' => 'education',
            ],
            [
                'title' => 'Sport',
                'slug' => 'sport',
            ],
            [
                'title' => 'Lifestyle',
                'slug' => 'lifestyle',
            ],
        ]);
    }
}
