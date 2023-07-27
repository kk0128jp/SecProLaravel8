<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            'name' => 'item1'
        ]);
        DB::table('item')->insert([
            'name' => 'item2'
        ]);
        DB::table('item')->insert([
            'name' => 'item3'
        ]);
    }
}
