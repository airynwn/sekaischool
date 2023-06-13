<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adminlaura',
            'email' => 'laura@laura.com',
            'cumple' => '2001-09-14',
            'admin' => true,
            'password' => Hash::make('adminadmin1'),
        ]);
    }
}
