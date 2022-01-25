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
        $block1 = Block::create([
            'title' => 'Slider Caption 1',
            'content' => '<h5 class="intro-title">Wish to become a</h5><div class="intro"><h3>Computer Engineer<br />with BCS (UK)?</h3></div><p class="description">With its specialist learning and rigorous quality<br class="uk-visible@l" />standards, the HEQ programme is recognized <br class="uk-visible@l" />around the world.</p>',
        ]);

        $block2 = Block::create([
            'title' => 'Slider Caption 2',
            'content' => '<p class="description">INTECH marks our unique authenticity by <br class="uk-visible@l" />training our students with industry related <br class="uk-visible@l" />exercises and up-to-date knowledge.</p>',
        ]);

        $block3 = Block::create([
            'title' => 'Main content - Reinvent Your Future...',
            'content' => '<h3>"Reinvent Your Future"</h3><h4>Learning From INTECH Experts</h4><p>INTECH marks our unique authenticity by training our students <br class="uk-visible@l">with unparalleled hands on experience blended with current market requirements.<br class="uk-visible@l"> It is a noteworthy fact to remark that INTECH is an ideal platform  to quench the thirst in the IT field. <br></p>',
        ]);

        $block4 = Block::create([
            'title' => 'Learning - Card',
            'content' => '<div class="card-heading"><h4>Learning</h4><p class="sub-title">Industry Experts</p></div><!--<div class="card-body"><p>INTECH marks our  unique authenticity by training our students with industry</p></div>-->',
        ]);

        $block5 = Block::create([
            'title' => 'Focus - Card',
            'content' => '<div class="card-heading"><h4>Focus</h4><p class="sub-title">Practical Technics</p></div><!--<div class="card-body"><p>INTECH marks our  unique authenticity by training our students with industry</p></div>-->',
        ]);

        $block6 = Block::create([
            'title' => 'Best Value - Card',
            'content' => '<div class="card-heading"><h4>Best Value</h4><p class="sub-title">Industry Experts</p></div><!--<div class="card-body"><p>INTECH marks our  unique authenticity by training our students with industry</p></div>-->',
        ]);

        $block7 = Block::create([
            'title' => 'TOP CATEGORIES - Heading',
            'content' => '<h4 class="heading-title">TOP CATEGORIES</h4><h2 class="heading">Our Most Popular Courses</h2>',
        ]);
        $block8 = Block::create([
            'title' => 'Category - Graphic Design',
            'content' => '<div class="intro"><h3>Graphic Design</h3></div><h5 class="intro-title">Diploma In Multimedia Graphic</h5><p class="description">Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood?...</p>',
        ]);

        $block9 = Block::create([
            'title' => 'Category - Graphic Design - Sub Content',
            'content' => '<p>"Graphic design has become an entity that is involved in every industry. Think about your health clinic; the charts, posters, leaflets and brochures that elaborate on your health and diseases are all created by graphic designers."</p>',
        ]);

        $block10 = Block::create([
            'title' => 'Category - Video Editing',
            'content' => '<div class="intro"><h3>Video Editing</h3></div><h5 class="intro-title">Diploma In Multimedia Video</h5><p class="description">Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood?...</p>',
        ]);

        $block11 = Block::create([
            'title' => 'Category - Video Editing - Sub Content',
            'content' => '<p>"Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas."</p>',
        ]);
        $block12 = Block::create([
            'title' => 'Category - 3D Modeling',
            'content' => '<div class="intro"><h3>3D Modeling</h3></div><h5 class="intro-title">Diploma In Multimedia 3D</h5><p class="description">Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood?...</p>',
        ]);
        $block13 = Block::create([
            'title' => 'Category - 3D Modeling - Sub Content',
            'content' => '<p>"INTECH multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video."</p>',
        ]);
        $block14 = Block::create([
            'title' => 'Why You Must Select Us?',
            'content' => '<h2>Why You Must <span>Select Us ?</span></h2>',
        ]);
        $block15 = Block::create([
            'title' => 'Why You Must Select Us - List',
            'content' => '<ul data-uk-scrollspy="target: > li; cls: uk-animation-slide-left; delay: 200"><li><span>Computers provided for each student</span></li><li><span>Internet facilities and Air Conditioned lecture halls</span></li><li><span>Unlimited time for practical training</span></li><li><span>Industry-focused curriculum</span></li><li><span>Registered in the tertiary and vocational education commission</span></li><li><span>Faculty panel completed with university professors and industry professionals</span></li><li><span>Basic knowledge not required to enroll in courses</span></li><li><span>Ability to pay course fees in installments</span></li></ul>',
        ]);
        $block16 = Block::create([
            'title' => 'CEO\'S Message - Heading',
            'content' => '<h4>Founder &  Chairman\'s Message</h4><h2>Be in Demand with <span>Our Professional Training</span></h2>',
        ]);
        $block17 = Block::create([
            'title' => 'Vision',
            'content' => '<p>To become the leading computer training institute that produces skilful and talented multimedia designers.</p>',
        ]);
        $block18 = Block::create([
            'title' => 'Mission',
            'content' => '<p>To produce creative talent that is qualified with theoretical and practical knowledge.</p>',
        ]);
    }
}
