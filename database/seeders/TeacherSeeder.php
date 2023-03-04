<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = new Teacher();
        $teachers->name = 'kamel';
        $teachers->email = 'mohamedkamel@outlook.fr';
        $teachers->password = Hash::make('1');
        $teachers->gender_id = 1;
        $teachers->joining_date = date('Y-m-d');
        $teachers->address = 'حي تعاونية الامير عبد القادر';
        $teachers->phone = '0660600606';
        $teachers->save();
    }
}
