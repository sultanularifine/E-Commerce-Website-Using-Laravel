<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = ['Registration', 'Others'];

        foreach ($courses as $cs) {
            $course = new Course();
            $course->name = $cs;
            $course->save();
        }
    }
}
