<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryArticleSeeder extends Seeder
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
                "name" => "Motivation",
                "user_id" => 1,
            ],
            [
                "id" => 2,
                "name" => "Creativity",
                "user_id" => 2,
            ],
        ];

        DB::table('category_articles')->insert($data);
    }
}
