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
        DB::table('Remedied')->insert([
            'user_name' => 'good-taro',
            'email' => 'taro@taro.com',
            'password' => Hash::make('taro'),
        ]);

        DB::table('Remedied')->insert([
            'user_name' => 'good-hanako',
            'email' => 'hanako@hanako.com',
            'password' => Hash::make('hanako'),
        ]);

        DB::table('Remedied')->insert([
            'user_name' => 'good-hoge',
            'email' => 'hoge@hoge.com',
            'password' => Hash::make('hoge'),
        ]);
    }
}
