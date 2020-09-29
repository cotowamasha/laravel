<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    private function getData () {
        return $data = [
            [
                'name' => 'admin',
                'email' => 'admin.admin@mail.ru',
                'password' => '$2y$10$d2a7Zx5Mske6qUA4UBsjX.TKL6i/iPVRRpMSjKojJzhCea/SFeWRi',
                'is_admin' => 1
            ]
        ];
    }
}
