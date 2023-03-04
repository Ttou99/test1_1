<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(RoomtypeSeeder::class);
        $this->call(RoomSeeder::class);
    }
}
