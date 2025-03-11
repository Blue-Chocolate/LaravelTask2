<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'fashion',
                'slug' => 'fashion',
                'parent_id' => null
            ],
            [
                'name' => 'lifestyle',
                'slug' => 'lifestyle',
                'parent_id' => null
            ],
            [
                'name' => 'news',
                'slug' => 'news',
                'parent_id' => null
            ],
            [
                'name' => 'sport',
                'slug' => 'sport',
                'parent_id' => null

            ],
            [
                'name' => 'tech',
                'slug' => 'tech',
                'parent_id' => null
            ],
            [
                'name' => 'programming',
                'slug' => 'programming',
                'parent_id' => 5
            ],

            [
                'name' => 'laptop',
                'slug' => 'laptop',
                'parent_id' => 5
            ],
            [
                'name' => 'mobile',
                'slug' => 'mobile',
                'parent_id' => 5
            ],

            [
                'name' => 'windows',
                'slug' => 'windows',
                'parent_id' => 5
            ],
            [
                'name' => 'mac',
                'slug' => 'mac',
                'parent_id' => 5
            ],


            [
                'name' => 'debian',
                'slug' => 'debian',
                'parent_id' => 5
            ],


        ]);
    }
}
