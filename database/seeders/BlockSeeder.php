<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Block;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $block1 = Block::create([
        //     'title' => 'Slider Caption 1',
        //     'content' => '<h5 class="intro-title">Wish to become a</h5><div class="intro"><h3>Computer Engineer<br />with BCS (UK)?</h3></div><p class="description">With its specialist learning and rigorous quality<br class="uk-visible@l" />standards, the HEQ programme is recognized <br class="uk-visible@l" />around the world.</p>',
        // ]);

        // $block2 = Block::create([
        //     'title' => 'Slider Caption 2',
        //     'content' => '<p class="description">AR Educations marks our unique authenticity by <br class="uk-visible@l" />training our students with industry related <br class="uk-visible@l" />exercises and up-to-date knowledge.</p>',
        // ]);

        $block3 = Block::create([
            'title' => 'Main content - Reinvent Your Future...',
            'content' => '<h2 class="sec_title white">Reinvent Your Future</h2>
            <p>AR Educations marks our unique authenticity by training our students <br class="uk-visible@l" />with unparalleled hands on experience blended with current market requirements.<br class="uk-visible@l" />It is a noteworthy fact to remark that AR Educations is an ideal platform to quench the thirst in the IT field.</p>',
        ]);

        $block7 = Block::create([
            'title' => 'TOP CATEGORIES - Heading',
            'content' => '<h4 class="heading-title">TOP CATEGORIES</h4><h2 class="heading">Our Most Popular Courses</h2>',
        ]);
        $block8 = Block::create([
            'title' => 'Category - Graphic Design',
            'content' => '<div class="intro"><h3>Graphic Design</h3></div><h5 class="intro-title">Diploma In Multimedia Graphic</h5><p class="description">Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood?...</p>',
        ]);

        // $block9 = Block::create([
        //     'title' => 'Category - Graphic Design - Sub Content',
        //     'content' => '<p>"Graphic design has become an entity that is involved in every industry. Think about your health clinic; the charts, posters, leaflets and brochures that elaborate on your health and diseases are all created by graphic designers."</p>',
        // ]);

        $block10 = Block::create([
            'title' => 'Category - Video Editing',
            'content' => '<div class="intro"><h3>Video Editing</h3></div><h5 class="intro-title">Diploma In Multimedia Video</h5><p class="description">Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood?...</p>',
        ]);

        // $block11 = Block::create([
        //     'title' => 'Category - Video Editing - Sub Content',
        //     'content' => '<p>"Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas."</p>',
        // ]);
        $block12 = Block::create([
            'title' => 'Category - 3D Modeling',
            'content' => '<div class="intro"><h3>3D Modeling</h3></div><h5 class="intro-title">Diploma In Multimedia 3D</h5><p class="description">Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood?...</p>',
        ]);
        // $block13 = Block::create([
        //     'title' => 'Category - 3D Modeling - Sub Content',
        //     'content' => '<p>"AR Educations multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video."</p>',
        // ]);
        $block14 = Block::create([
            'title' => 'Why You Must Select Us?',
            'content' => '<h4 class="sub_title">our specialties</h4><h2 class="sec_title">Why You Must Select Us ?</h2>',
        ]);
        $block15 = Block::create([
            'title' => 'Why You Must Select Us - List',
            'content' => '<div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="serviceArea serviceArea2 text-left">
                <ul>
                  <li><i class="fa fa-check-square"></i>Computers provided for each student</li>
                  <li><i class="fa fa-check-square"></i>Internet facilities and Air Conditioned lecture halls</li>
                  <li><i class="fa fa-check-square"></i>Unlimited time for practical training</li>
                  <li><i class="fa fa-check-square"></i>Industry-focused curriculum</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="serviceArea serviceArea2 text-left">
                <ul>
                  <li><i class="fa fa-check-square"></i>Registered in the tertiary and vocational education commission</li>
                  <li><i class="fa fa-check-square"></i>Faculty panel completed with university professors and industry professionals</li>
                  <li><i class="fa fa-check-square"></i>Basic knowledge not required to enroll in courses</li>
                  <li><i class="fa fa-check-square"></i>Ability to pay course fees in installments</li>
                </ul>
              </div>
            </div>
        </div>',
        ]);
        // $block16 = Block::create([
        //     'title' => 'CEO\'S Message - Heading',
        //     'content' => '<h4>Founder &  Chairman\'s Message</h4><h2>Be in Demand with <span>Our Professional Training</span></h2>',
        // ]);
        $block16 = Block::create([
            'title' => 'Footer - about',
            'content' => '<p class="description">AR Educations marks our unique authenticity by training our students with industry related exercises and up-to-date knowledge.</p>',
        ]);
        $block17 = Block::create([
            'title' => 'Vision',
            'content' => '<h4>Our Vision</h4><p>To be the most trusted and value added education partner in Sri Lanka.</p>',
        ]);
        $block18 = Block::create([
            'title' => 'Mission',
            'content' => '<h4>Our Mission</h4><p>To be the most trusted and value added education partner in Sri Lanka.</p>',
        ]);
        $block19 = Block::create([
            'title' => 'Join With Our 1,00+ Stu....',
            'content' => '<h2>Join With Our 1,00+ Happy Students​ Today!</h2>
            <p>AR Educations has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier.</p>',
        ]);
    }
}
