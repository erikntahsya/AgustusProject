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
     */

public function run()
{
    DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('1234'),
        'no_tlp' => '0812345678',
        'alamat' => 'konoha',
        'level' => 'admin'
    ]);
    DB::table('users')->insert([
        'name' => 'Admin2',
        'email' => 'admin2@example.com',
        'password' => Hash::make('password123'),
        'no_tlp' => '0898765432',
        'alamat' => 'logue town',
        'level' => 'admin'
    ]);
    DB::table('users')->insert([
        'name' => 'erik',
        'email' => 'emilia@gmail.com',
        'password' => Hash::make('password123'),
        'no_tlp' => '081234598',
        'alamat' => 'laugh tale',
        'level' => 'pelanggan'
    ]);
}

}
