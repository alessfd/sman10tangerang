<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert( [
            [
                'title' => 'Prestasi Tim Basket',
                'slug' => Str::slug('Prestasi Tim Basket'),
                'thumbnail' => 'thumbnail/Basket.jpg',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas, neque ac convallis ullamcorper, quam tortor pharetra neque, non aliquam magna mauris viverra turpis. Nulla ornare justo vitae nisi condimentum, et pulvinar dolor laoreet. Nulla tincidunt metus elementum gravida sodales. Nunc vel arcu rutrum, ultricies ligula convallis, vehicula quam. Nulla tristique semper metus, maximus lobortis eros scelerisque a. Ut sit amet libero ut diam hendrerit ornare at et erat. Quisque rutrum id risus ac molestie. Vestibulum suscipit tortor et fringilla maximus. Nulla vitae urna vitae nisl mollis elementum.</p>
<p>Phasellus interdum volutpat tristique. Nullam ut urna odio. In rutrum faucibus sapien ut varius. Sed sed facilisis augue. Nulla non bibendum magna. Quisque fringilla rutrum ipsum, quis egestas leo egestas vel. Vestibulum posuere sed dolor sed congue. Etiam quam tellus, elementum hendrerit nulla vitae, posuere pellentesque mauris. Quisque quam lectus, malesuada a leo vel, sodales pulvinar odio. Etiam ac est feugiat sapien porta eleifend eu et nibh. Aenean tortor mi, faucibus at odio vel, pellentesque fringilla lectus. Nullam iaculis lectus sed orci maximus fermentum. Aenean a ligula vestibulum, luctus metus non, sodales risus.</p>',
                'active' => 1,
                'user_id' => 1,
            ],
            [
                'title' => 'The Future of Education',
                'slug' => Str::slug('The Future of Education'),
                'thumbnail' => 'thumbnail/Upacara.jpg',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas, neque ac convallis ullamcorper, quam tortor pharetra neque, non aliquam magna mauris viverra turpis. Nulla ornare justo vitae nisi condimentum, et pulvinar dolor laoreet. Nulla tincidunt metus elementum gravida sodales. Nunc vel arcu rutrum, ultricies ligula convallis, vehicula quam. Nulla tristique semper metus, maximus lobortis eros scelerisque a. Ut sit amet libero ut diam hendrerit ornare at et erat. Quisque rutrum id risus ac molestie. Vestibulum suscipit tortor et fringilla maximus. Nulla vitae urna vitae nisl mollis elementum.</p>
<p>Phasellus interdum volutpat tristique. Nullam ut urna odio. In rutrum faucibus sapien ut varius. Sed sed facilisis augue. Nulla non bibendum magna. Quisque fringilla rutrum ipsum, quis egestas leo egestas vel. Vestibulum posuere sed dolor sed congue. Etiam quam tellus, elementum hendrerit nulla vitae, posuere pellentesque mauris. Quisque quam lectus, malesuada a leo vel, sodales pulvinar odio. Etiam ac est feugiat sapien porta eleifend eu et nibh. Aenean tortor mi, faucibus at odio vel, pellentesque fringilla lectus. Nullam iaculis lectus sed orci maximus fermentum. Aenean a ligula vestibulum, luctus metus non, sodales risus.</p>',
                'active' => 1,
                'user_id' => 1,
            ],
            [
                'title' => 'Top 10 Health Tips',
                'slug' => Str::slug('Top 10 Health Tips'),
                'thumbnail' => 'thumbnail/Lab_Ipa.JPG',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas, neque ac convallis ullamcorper, quam tortor pharetra neque, non aliquam magna mauris viverra turpis. Nulla ornare justo vitae nisi condimentum, et pulvinar dolor laoreet. Nulla tincidunt metus elementum gravida sodales. Nunc vel arcu rutrum, ultricies ligula convallis, vehicula quam. Nulla tristique semper metus, maximus lobortis eros scelerisque a. Ut sit amet libero ut diam hendrerit ornare at et erat. Quisque rutrum id risus ac molestie. Vestibulum suscipit tortor et fringilla maximus. Nulla vitae urna vitae nisl mollis elementum.</p>
<p>Phasellus interdum volutpat tristique. Nullam ut urna odio. In rutrum faucibus sapien ut varius. Sed sed facilisis augue. Nulla non bibendum magna. Quisque fringilla rutrum ipsum, quis egestas leo egestas vel. Vestibulum posuere sed dolor sed congue. Etiam quam tellus, elementum hendrerit nulla vitae, posuere pellentesque mauris. Quisque quam lectus, malesuada a leo vel, sodales pulvinar odio. Etiam ac est feugiat sapien porta eleifend eu et nibh. Aenean tortor mi, faucibus at odio vel, pellentesque fringilla lectus. Nullam iaculis lectus sed orci maximus fermentum. Aenean a ligula vestibulum, luctus metus non, sodales risus.</p>',
                'active' => 1,
                'user_id' => 1,
            ],
        ]);
    }
}
