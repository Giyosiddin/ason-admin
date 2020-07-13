<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'title' => 'Men','slug' => 'men', 'parent_id' => '0', 'is_active' => '1', 'left' => "1", 'right' => '0'],
            ['id' => '2', 'title' => 'Women','slug' => 'women', 'parent_id' => '0', 'is_active' => '1', 'left' => "1", 'right' => '0'],
            ['id' => '3', 'title' => 'Kids','slug' => 'kids', 'parent_id' => '0', 'is_active' => '1', 'left' => "1", 'right' => '0'],
            ['id' => '4', 'title' => 'Электронные','slug' => 'elektronnye', 'parent_id' => '0', 'is_active' => '1', 'left' => "1", 'right' => '0'],
            ['id' => '5', 'title' => 'Механические','slug' => 'mehanicheskie', 'parent_id' => '0', 'is_active' => '1', 'left' => "1", 'right' => '0'],

        ];
          DB::table('categories')->insert($data);
    }
}
