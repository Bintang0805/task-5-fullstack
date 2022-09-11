<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                "id" => 1,
                "name" => "Muhammad Ikhsan Bintang",
                "email" => "ikhsan.bintang@gmail.com",
                "password" => Hash::make("password"),
            ],
            [
                "id" => 2,
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make('password'),
            ]
        ];

        DB::table('users')->insert($data);
    }
}
