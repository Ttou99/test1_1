<?php

namespace Database\Seeders;

use App\Models\Roomtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roomtype::create([
            'name' => 'Amphi',
        ]);
        Roomtype::create([
            'name' => 'Salles de TD',
        ]);
        Roomtype::create([
            'name' => 'Salles de TP',
        ]);

        Roomtype::create([
            'name' => 'Salle Multimédia',
        ]);
    }
}
