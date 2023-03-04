<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = new Room();
        $rooms->roomno = 3;
        $rooms->roomtype_id = Roomtype::all()->unique()->random()->id;
        $rooms->save();
    }
}


