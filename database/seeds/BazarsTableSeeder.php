<?php

use Illuminate\Database\Seeder;

class BazarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $data = [
                [
                  
                    'name' => 'Chorsu',
                    'slug' => 'chorsu',
                    'address' => 'Chorsu',
                    'description' => 'Bazar description',
                    'image' => '/images/bazars/chorsu.jpg',
                ],
                [
                  
                    'name' => 'Oloy bozori',
                    'slug' => 'oloy-bozori',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/bazars/alay-bazar.jpg',
                ],
                [
                  
                    'name' => 'Otchopar',
                    'slug' => 'otchopar',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/bazars/buyum.jpg',
                ],
                [
                  
                    'name' => 'Abu Saxiy',
                    'slug' => 'abu-saxiy',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/bazars/abu-saxiy.jpg',
                ],               

            ];

        foreach ($data as $item) {
            \App\Bazar::updateOrCreate(['name' => $item['name']],$item);           
        }

    }
}
