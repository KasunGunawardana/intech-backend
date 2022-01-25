<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructor1 = Instructor::create([
            'name' => 'OSANDA NONIS',
            'title' => 'General Manager',
            'description' => '<ul><li><!--block-->Bsc. (Honors in Computing from university of East london uk.)</li><li><!--block-->Film and video Production from Cavendish Collage, London UK</li></ul>',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com/',
            'image' => 'instructors/default.jpg'
        ]);

        $instructor2 = Instructor::create([
            'name' => 'Michael S Stephen',
            'title' => 'Graphic Designer',
            'description' => '<ul><li><!--block-->Senior Interior and exterior 3D and Architectural Designer TEGAZ BUMI RESOURCES (pvt)LTD Malaysia</li><li><!--block-->Senior Graphic Designer Sovereigns Advertising (PVT)LTD</li><li><!--block-->Senior Support Engeneer Sybernet Software Solutions BPO India<br>Lecturer in Raffles University</li><li><!--block-->HNC &amp; HND In interactive Graphic Design and Digital Media</li></ul>',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com/',
            'image' => 'instructors/default.jpg'
        ]);
    }
}
