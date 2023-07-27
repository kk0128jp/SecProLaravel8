<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnmeasuredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unmeasured')->insert([
            'user_name' => 'bad-taro',
            'email' => 'taro@taro.com',
            'password' => 'taro',
        ]);

        DB::table('unmeasured')->insert([
            'user_name' => 'bad-hanako',
            'email' => 'hanako@hanako.com',
            'password' => 'hanako',
        ]);

        DB::table('unmeasured')->insert([
            'user_name' => 'bad-hoge',
            'email' => 'hoge@hoge.com',
            'password' => 'hoge',
        ]);
    }
}
