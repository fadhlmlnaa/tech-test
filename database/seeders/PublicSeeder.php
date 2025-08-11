<?php

namespace Database\Seeders;

use App\Models\PublicUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicSeeder extends Seeder
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
                'name' => 'user1', 
                'email' => 'user1@gmail.com',
                'password' => 'admin'
            ],
            [
                'name' => 'user2', 
                'email' => 'user2@gmail.com',
                'password' => 'admin'
            ],
            [
                'name' => 'user3', 
                'email' => 'user3@gmail.com',
                'password' => 'admin'
            ]
        ];

        foreach ($data as $item) {
            PublicUsers::create($item);
        }
    }
}
