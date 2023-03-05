<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practices')->insert([
            [
                'title' => 'aaa',
                'content' =>'あああ',
                'created_at' => Now()
            ],
            [
                'title' => 'bbb',
                'content' => 'いいい',
                'created_at' => Now()
            ],
        ]);
    }
}
