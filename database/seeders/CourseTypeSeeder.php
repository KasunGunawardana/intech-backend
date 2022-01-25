<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\CourseType;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseType1 = CourseType::create([
            'name' => 'Diploma'
        ]);

        $courseType2 = CourseType::create([
            'name' => 'Certificate'
        ]);
    }
}
