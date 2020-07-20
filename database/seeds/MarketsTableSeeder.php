<?php

use Illuminate\Database\Seeder;

class MarketsTableSeeder extends Seeder
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
                  
                    'name' => 'Bazar 1',
                    'slug' => 'bazar-1',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/alay-bazar.jpg',
                ],
                [
                  
                    'name' => 'Bazar 2',
                    'slug' => 'bazar-2',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/alay-bazar.jpg',
                ],
                [
                  
                    'name' => 'Bazar 3',
                    'slug' => 'bazar-3',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/alay-bazar.jpg',
                ],
                [
                  
                    'name' => 'Bazar 4',
                    'slug' => 'bazar-4',
                    'address' => 'Bazar address',
                    'description' => 'Bazar description',
                    'image' => '/images/alay-bazar.jpg',
                ],               

            ];

        foreach ($data as $item) {
            \App\Market::updateOrCreate(['name' => $item['name']],$item);           
        }

    }
}
