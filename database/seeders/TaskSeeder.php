<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tasks')->truncate();

        DB::table('tasks')->insert([
            [
                'id' => 1,
                'name' => 'パンを買う',
                'content' => 'ふわふわした食感のパンが新しくでた！',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            [
                'id' => 2,
                'name' => 'Laravelを勉強',
                'content' => 'Laravel9が出たので、3時間勉強する',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            [
                'id' => 3,
                'name' => 'ランニング',
                'content' => '新しいコースで10kmを目標に走る',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            [
                'id' => 4,
                'name' => '犬の散歩',
                'content' => '新しいリールで、近所の公園を散歩しよう',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            [
                'id' => 5,
                'name' => 'アニメを見る',
                'content' => '王様ランキングを忘れずに見る',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ]
        ]);
    }
}
