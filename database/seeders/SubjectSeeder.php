<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use App\Models\Branch;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = new Subject();
        $subjects->name_subject = 'ASD';
        $subjects->semestre = 0;
        $subjects->academicyear_id = Academicyear::all()->unique()->random()->id;
        $subjects->branch_id = Branch::all()->unique()->random()->id;
        $subjects->save();
    }
}
