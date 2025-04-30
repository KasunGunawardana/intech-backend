<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Page::create([
            'name' => 'About Us',
            'heading' => 'AR Educations',
            'url' => 'about',
            'meta_title' => 'About Us | AR Educations',
            'meta_description' => 'AR Educations has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier.',
            'keywords' => 'Graphic Designing, 2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
            'content' => '<p>Technology can be regarded as a primary source in economic development and the various technological changes contribute significantly to Countries like Sri Lanka. Technology has transformed almost every aspect of our lives, and now it seems that education systems around the world are due for an update. Educators are tapping into the digital revolution and adopting new technologies to help students reach their full potential.</p><p>To become a professional in any technology career path, theoretical knowledge along would not sufficient and every scholar must have a wide array of competencies and skills to deliver quality outcomes over technology assignments in their professional lives. We strongly believe that no one can reach success with their inherent talents, and that is it up to institutions like us to harness one&rsquo;s talent with proper guidance and training.</p>',
            'show_nav' => TRUE,
            'static' => TRUE,
            'contained_box' => TRUE,
            'order' => '1',
            'image' => 'pages/about-banner.jpg',
        ]);
    }
}
