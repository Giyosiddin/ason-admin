<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
                    'id' => '1',
                    'parent_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Casio MQ-24-7 BUL KXF - Касио МК',
                    'cost' => 200,
                    'cover_image' => '/product/2.png',
                ],
                [
                    'id' => '2',
                    'parent_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Casio GA-1000-1 AER KXF - Касио ДЖА АЕ К',
                    'cost' => 400,
                    'cover_image' => '/product/3.png',
                ],
                [
                    'id' => '3',
                    'parent_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Casio GA-1000-1 AER KXF - Касио ДЖА АЕ К',
                    'cost' => 400,
                    'cover_image' => '/product/3.png',
                ],
                [
                    'id' => '4',
                    'parent_id' => '1',
                    'brand_id' => '2',
                    'title' => 'Citizen JP1010-00E KXF - Ситизен Дж П К ИКС Ф',
                    'cost' => 350,
                    'cover_image' => '/product/4.png',
                ],


                [
                    'id' => '5',
                    'parent_id' => '1',
                    'brand_id' => '2',
                    'title' => 'Citizen BJ2111-08E KXF - Ситизен БДж211 ФБ',
                    'cost' => 320,
                    'cover_image' => '/product/5.png',
                ],
                [
                    'id' => '6',
                    'parent_id' => '1',
                    'brand_id' => '2',
                    'title' => 'Citizen AT0696-59E KX - Ситизен АТС ФВ',
                    'cost' => 370,
                    'cover_image' => '/product/6.png',
                ],


                [
                    'id' => '7',
                    'parent_id' => '11',
                    'brand_id' => '3',
                    'title' => 'Q&Q Water Resistance VFQ - Кью Кью Вотер Резинтент ФВ',
                    'cost' => 320,
                    'cover_image' => '/product/7.png',
                ],
                [
                    'id' => '8',
                    'parent_id' => '11',
                    'brand_id' => '4',
                    'title' => 'Royal London 41040-01VQ - Ройял Лондон Часы 410 ВКью',
                    'cost' => 370,
                    'cover_image' => '/product/8.png',
                ],
                [
                    'id' => '9',
                    'parent_id' => '1',
                    'brand_id' => '4',
                    'title' => 'Royal London 20034-02 VQ - Ройял Лондон Часы 900',
                    'cost' => 320,
                    'cover_image' => '/product/9.png',
                ],
                [
                    'id' => '10',
                    'parent_id' => '1',
                    'brand_id' => '4',
                    'title' => 'Royal London 41156-02 KVQ - - Ройял Лондон Часы ФВ 8',
                    'cost' => 370,
                    'cover_image' => '/product/10.png',
                ],


                [
                    'id' => '11',
                    'parent_id' => '1',
                    'brand_id' => '2',
                    'title' => 'Swimming Watch VQ-01 - Часы для плавание в бассейне',
                    'cost' => 370,
                    'cover_image' => '/product/11.png',
                ],
                [
                    'id' => '12',
                    'parent_id' => '1',
                    'brand_id' => '2',
                    'title' => 'Running Watch VQ-9 - Беговые часы на андроиде',
                    'cost' => 370,
                    'cover_image' => '/product/12.png',
                ],

                

            ];

        foreach ($data as $item) {
            \App\Product::updateOrCreate(['title' => $item['title']],$item);           
        }

    }
}