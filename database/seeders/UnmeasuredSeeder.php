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
            'user_name' => 'badtaro',
            'email' => 'taro@taro.com',
            'password' => 'taro',
        ]);

        DB::table('unmeasured')->insert([
            'user_name' => 'badhanako',
            'email' => 'hanako@hanako.com',
            'password' => 'hanako',
        ]);

        DB::table('unmeasured')->insert([
            'user_name' => 'badhoge',
            'email' => 'hoge@hoge.com',
            'password' => 'hoge',
        ]);
    }
}
