<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Academicyear::create([
            'name' => '1ère année informatique',
        ]);

        Academicyear::create([
            'name' => '2ème année informatique',
        ]);
        Academicyear::create([
            'name' => '3ème année informatique',
        ]);
        Academicyear::create([
        'name' => '1ère année Master',
        ]);
        Academicyear::create([
            'name' => '2ème année Master',
        ]);

    }
}
