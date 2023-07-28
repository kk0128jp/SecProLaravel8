<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RemediedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('remedieds')->insert([
            'user_name' => 'goodtaro',
            'email' => 'taro@taro.com',
            'password' => Hash::make('taro'),
        ]);

        DB::table('remedieds')->insert([
            'user_name' => 'goodhanako',
            'email' => 'hanako@hanako.com',
            'password' => Hash::make('hanako'),
        ]);

        DB::table('remedieds')->insert([
            'user_name' => 'goodhoge',
            'email' => 'hoge@hoge.com',
            'password' => Hash::make('hoge'),
        ]);
    }
}
