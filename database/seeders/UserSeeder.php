<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Korichi Taher',
            'email' => 'Korichitaher@gmail.com',
            'created_at' => Carbon::now(),
            'password' => Hash::make('1'),
        ]);

        DB::table('users')->insert([
            'name' => 'Omar Saoudi',
            'email' => 'saoudiomar518@gmail.com',
            'created_at' => Carbon::now(),
            'password' => Hash::make('1'),
        ]);
    }
}
