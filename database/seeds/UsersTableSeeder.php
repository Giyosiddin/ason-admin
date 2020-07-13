<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class UsersTableSeeder extends Seeder
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
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'a@a.ru',
                    'password' => 12345678,
                ],
                [
                    'id' => 2,
                    'name' => 'user',
                    'email' => 'u@u.ru',
                    'password' => 12345678,
                ]
            ];
            foreach ($data as $item) {
                \App\User::updateOrCreate(['email' => $item['email']], $item);
            }
        }

    }
