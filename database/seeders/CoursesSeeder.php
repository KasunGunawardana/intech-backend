<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Course;
use App\Models\CourseType;
use App\Models\Instructor;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $courseType1 = CourseType::create([
            'name' => 'Certificate',
            'type_order' => 1
        ]);

        // $courseType2 = CourseType::create([
        //     'name' => 'Diploma',
        //     'type_order' => 2
        // ]);

        // $courseType3 = CourseType::create([
        //     'name' => 'Short Courses',
        //     'type_order' => 3
        // ]);

        // $courseType4 = CourseType::create([
        //     'name' => 'Packages',
        //     'type_order' => 4
        // ]);

        // $courseType5 = CourseType::create([
        //     'name' => 'BCS',
        //     'type_order' => 5
        // ]);

        $instructor1 = Instructor::create([
            'name' => 'OSANDA NONIS',
            'title' => 'General Manager',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->Bsc. (Honors in Computing from university of East london uk.)</li><li><!--block-->Film and video Production from Cavendish Collage, London UK</li></ul>',
            'image' => 'instructors/general-male.jpg',
            'instructor_order' => 1
        ]);

        $instructor3 = Instructor::create([
            'name' => 'AMILA YAHALAWELA',
            'title' => 'Video Editor',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->B.A. University of Colombo</li><li><!--block-->Creative Director in Advertising Industry</li><li><!--block-->Author and Short Film Maker</li></ul>',
            'image' => 'instructors/amila.jpg',
            'instructor_order' => 2
        ]);

        $instructor4 = Instructor::create([
            'name' => 'CHAMIL PATHIRANA',
            'title' => 'Senior Designer',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->Writer, Director, Producer @Thaala Roopa Pvt Ltd</li><li><!--block-->Visiting Lecturer (2012 to 2014) @ University of the Visual & Performing Arts</li><li><!--block-->Senior Designer (2007 to 2012) @TV Derana – Sri Lanka’s Premium Entertainment Channel</li></ul>',
            'image' => 'instructors/general.jpg',
            'instructor_order' => 3
        ]);

        $instructor5 = Instructor::create([
            'name' => 'GAYAN JANAKA',
            'title' => 'Graphic Designer',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->Senior Design and cost excutive ADV engeneering 2011 to Present</li><li><!--block-->Q.S and Designer UNI-EFF (PVT) LTD 2008-2010</li><li><!--block-->Arch Designer at Innovative Design Systems (PVT) LTD – 2005-2007</li></ul>',
            'image' => 'instructors/general-male.jpg',
            'instructor_order' => 5
        ]);

        $instructor6 = Instructor::create([
            'name' => 'H.M.ASHAN INDIKA HERATH',
            'title' => 'UI & Graphic Designer',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->Senior UI & Graphic Designer in JP Web Solution (PVT)LTD 2017 to present</li><li><!--block-->Senior Graphic Designer Asaka Company (PVT)LTD 2012-2017</li><li><!--block-->Bsc. Information technology</li><li><!--block-->HND in Photography</li></ul>',
            'image' => 'instructors/general-male.jpg',
            'instructor_order' => 4
        ]);

        $instructor8 = Instructor::create([
            'name' => 'I.P.Wimal Chandana',
            'title' => 'Mechanical Engineeriner',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->BSc. Eng (Hons), Mechanical Engineering (University of Moratuwa)</li><li><!--block-->Master in Business Administration (University of Colombo)</li><li><!--block-->P.gD. Diploma in Manufacturing Management (University of Colombo)</li></ul>',
            'image' => 'instructors/general.jpg',
            'instructor_order' => 5
        ]);

        $instructor9 = Instructor::create([
            'name' => 'Vishleshaka Rathnayaka',
            'title' => 'Motivational Speaker',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->Lecture / Motivational Speaker</li><li><!--block-->KAL/FCE/TKT(Mod I,ii,iii)- University of cambridge(UK)</li><li><!--block-->Upper-Intermediate I, ii, iii – British Council Colombo</li><li><!--block-->Pre Advanced – British Council Colombo</li></ul>',
            'image' => 'instructors/Vishleshaka.jpg',
            'instructor_order' => 6
        ]);

        $instructor10 = Instructor::create([
            'name' => 'K M R L Gunathilake',
            'title' => 'Motivational Speaker',
            'description' => '<ul class="instructors-ul" data-uk-scrollspy="target: >li; cls: uk-animation-slide-right; delay: 300"><li><!--block-->Bachelor of Information Technology University of Colombo</li><li><!--block-->ICT teacher at Warawewa Maha Vidyalaya</li><li><!--block-->IT head of Negombo South International School</li><li><!--block-->Instructor of Computer Resource Center (Maho Zonal)</li></ul>',
            'image' => 'instructors/general-male.jpg',
            'instructor_order' => 7
        ]);

        // $course1 = Course::create([
        //     'name' => 'Diploma in Multimedia 3D',
        //     'url' => 'diploma-in-multimedia-3d',
        //     'heading' => 'Learn 3D Animation ( Max & Maya) from Scratch',
        //     'sub_heading' => 'Become a part of Successful 3D multimedia journey',
        //     'meta_title' => 'Diploma in Multimedia 3D | INTECH | Reinvent Your Future',
        //     'meta_description' => 'INTECH multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas.',
        //     'keywords' => 'Graphic Designing, 2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
        //     'content' => '<div><!--block-->Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood? The comics we read? Movies like Handaya, Jurassic Park, Madol Duwa, Robinson Crusoe? How are these brought to life? Who creates these? We know that a medical student becomes a doctor and an engineering student becomes and engineer. But what did the creative who brought these films and cartoons to life study? The simplest answer is Multimedia. Multimedia covers animations, graphics, and video production that helps in creating motion pictures.<br><br></div><div><!--block-->IDIT multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas.<br><br></div><div><!--block-->Imagination makes us a bird flying high in the sky, takes us in to a fairy tale world that we’ve read in a book, and gives voice to an elephant roaming deep in the jungle. This is the power of 3D animation. Never in our wildest dreams did we expect to see a mammoth that was declared extinct centuries ago. But with the help of animation, we relive their world in the Ice Age series. This Diploma in 3D delivers a complete training in 3D Animation with practical assignments to bring your creativity to life.<br></div>',
        //     'syllabus' => '<div><strong>1<sup>st</sup> Semester</strong><ul><li>Graphic Designing</li><li>2D Animation</li><li>3D Animation – Level_l</li><li>Video Editing & VFX</li><li>Advertising</li><li>Freelancing</li></ul><br><strong>2<sup>nd</sup> Semester</strong><ul><li>Auto Cad </li><li>3D Animation – Level_ll (Max or Maya) </li><li>3D Animation – Level_lll</li></ul></div>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH) or Certificate in Graphic Designing (INTECH)</li></ul>',
        //     'duration' => '14 months (1376 Hours)',
        //     'price' => '199,000',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/multimedia-3d.jpg',
        //     'course_order' => 1,
        //     'course_type_id' => $courseType1->id,
        //     'instructor_id' => $instructor2->id
        // ]);

        // $course2 = Course::create([
        //     'name' => 'Diploma in multimedia Video',
        //     'url' => 'diploma-in-multimedia-video',
        //     'heading' => 'Learn Diploma in multimedia Video from Scratch',
        //     'sub_heading' => 'Become a Successful Videographer',
        //     'meta_title' => 'Diploma in multimedia Video | INTECH | Reinvent Your Future',
        //     'meta_description' => 'INTECH multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas.',
        //     'keywords' => 'Graphic Designing, 2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
        //     'content' => '<div><!--block-->Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood? The comics we read? Movies like Handaya, Jurassic Park, Madol Duwa, Robinson Crusoe? How are these brought to life? Who creates these? We know that a medical student becomes a doctor and an engineering student becomes and engineer. But what did the creative who brought these films and cartoons to life study? The simplest answer is Multimedia. Multimedia covers animations, graphics, and video production that helps in creating motion pictures.<br><br></div><div><!--block-->IDIT multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas.<br><br></div><div><!--block-->Imagination makes us a bird flying high in the sky, takes us in to a fairy tale world that we’ve read in a book, and gives voice to an elephant roaming deep in the jungle. This is the power of 3D animation. Never in our wildest dreams did we expect to see a mammoth that was declared extinct centuries ago. But with the help of animation, we relive their world in the Ice Age series. This Diploma in 3D delivers a complete training in 3D Animation with practical assignments to bring your creativity to life.<br></div>',
        //     'syllabus' => '<div><strong>1<sup>st</sup> Semester</strong><ul><li>Graphic Designing</li><li>2D Animation</li><li>3D Animation – Level_l</li><li>Video Editing & VFX</li><li>Advertising</li><li>Freelancing</li></ul><br><strong>2<sup>nd</sup> Semester</strong><ul><li>Photography</li><li>Video Productions</li></ul></div>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH) or Certificate in Graphic Designing (INTECH)</li></ul>',
        //     'duration' => '1 Year (1330 Hours)',
        //     'price' => '184,900',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/multimedia-video.jpg',
        //     'course_order' => 2,
        //     'course_type_id' => $courseType1->id,
        //     'instructor_id' => $instructor2->id
        // ]);

        // $course3 = Course::create([
        //     'name' => 'Diploma in multimedia Graphic',
        //     'url' => 'diploma-in-multimedia-graphic',
        //     'heading' => 'Learn Graphic Design from Scratch',
        //     'sub_heading' => 'Become a Successful Graphic Designer',
        //     'meta_title' => 'Diploma in multimedia Graphic | INTECH | Reinvent Your Future',
        //     'meta_description' => 'INTECH multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas.',
        //     'keywords' => 'Graphic Designing, 2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
        //     'content' => '<div><!--block-->Remember the cartoons Tin Tin, Ben10, Road Runner, Scooby Doo, Asterix, Doctor Doolittle, Top Cat, Tom and Jerry we watched in our childhood? The comics we read? Movies like Handaya, Jurassic Park, Madol Duwa, Robinson Crusoe? How are these brought to life? Who creates these? We know that a medical student becomes a doctor and an engineering student becomes and engineer. But what did the creative who brought these films and cartoons to life study? The simplest answer is Multimedia. Multimedia covers animations, graphics, and video production that helps in creating motion pictures.<br><br></div><div><!--block-->IDIT multimedia students will be learning the basics of Graphic Designing, 2D Animation, 3D Animation and Post Production within 6 months. Graduates of the diploma course are qualified to enrol in Diploma on Graphics, Diploma in 3D and Diploma in Video. Upon completion of these courses will advance you to become a specialist in your respective areas.<br><br></div><div><!--block-->Imagination makes us a bird flying high in the sky, takes us in to a fairy tale world that we’ve read in a book, and gives voice to an elephant roaming deep in the jungle. This is the power of 3D animation. Never in our wildest dreams did we expect to see a mammoth that was declared extinct centuries ago. But with the help of animation, we relive their world in the Ice Age series. This Diploma in 3D delivers a complete training in 3D Animation with practical assignments to bring your creativity to life.<br></div>',
        //     'syllabus' => '<div><strong>1<sup>st</sup> Semester</strong><ul><li>Graphic Designing</li><li>2D Animation</li><li>3D Animation – Level_l</li><li>Video Editing & VFX</li><li>Advertising</li><li>Freelancing</li></ul><br><strong>2<sup>nd</sup> Semester</strong><ul><li>Photography</li><li>Web Design</li></ul></div>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH) or Certificate in Graphic Designing (INTECH)</li></ul>',
        //     'duration' => '1 Year (1300 Hours)',
        //     'price' => '179,900',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/graphic-design.jpg',
        //     'course_order' => 3,
        //     'course_type_id' => $courseType1->id,
        //     'instructor_id' => $instructor2->id
        // ]);

        // $course4 = Course::create([
        //     'name' => 'Diploma in ICT',
        //     'url' => 'diploma-in-ict',
        //     'heading' => 'Learn Basic Aspects of ICT',
        //     'sub_heading' => 'Become a memeber of the fastest growing industry',
        //     'meta_title' => 'Diploma in ICT | INTECH | Reinvent Your Future',
        //     'meta_description' => 'INTECH Diploma in ICT is specially designed people who willing to learn ICT from scratch.',
        //     'keywords' => 'Graphic Designing, ICT, Freelancing',
        //     'content' => '<div><!--block-->Diploma in ICT programme covers all the basic aspects of Information Communications Technology. Upon completion of this programme students can do further studies with module exemptions for relevant subjects in most of the ICT degree programmes.<br></div>',
        //     'syllabus' => '<ul><li>Concepts of ICT</li><li>Datacenter Management</li><li>Overview of Computer Applications /Software</li><li>Fundamentals of Cloud Computing</li><li>Fundamentals of Management & Information systems(MIS)</li><li>Database systems Management  & Backup</li><li>Overview of Emerging Technologies</li><li>IT Project Management</li><li>Leadership & strategic Management</li><li>Individual Project / Research</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '8 Months (1291 Hours)',
        //     'price' => '159, 900',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/ict-diploma.jpg',
        //     'course_order' => 4,
        //     'course_type_id' => $courseType1->id,
        //     'instructor_id' => $instructor8->id
        // ]);

        $course5 = Course::create([
            'name' => 'Certificate in 3D Animation',
            'url' => 'certificate-in-3d-animation',
            'heading' => 'Learn 3D Animation ( Max & Maya) from Scratch',
            'sub_heading' => 'Become a Successful 3D Animater',
            'meta_title' => 'Certificate in 3D Animation | INTECH | Reinvent Your Future',
            'meta_description' => 'Avengers: Infinity War is a film that has attracted millions across the world. The fascination of the film lies on superheroes including Ironman, Spiderman, Black Panther, etc flying with the help of Computer-Generated Imagery. Marvel Comics, loved by generations of readers and movie goers, are brought to life by 3D animation. Its newest creation is the Sri Lankan Comic ‘Gajaman’ becoming a 3D movie. By learning this course, not only will you be able to give wings to your dreams but also be employed in an industry that brings in much revenue annually.',
            'keywords' => '2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
            'content' => '<div><!--block-->Avengers: Infinity War is a film that has attracted millions across the world. The fascination of the film lies on superheroes including Ironman, Spiderman, Black Panther, etc flying with the help of Computer-Generated Imagery. Marvel Comics, loved by generations of readers and movie goers, are brought to life by 3D animation. Its newest creation is the Sri Lankan Comic ‘Gajaman’ becoming a 3D movie. By learning this course, not only will you be able to give wings to your dreams but also be employed in an industry that brings in much revenue annually.<br></div>',
            'syllabus' => '<div>A Brief introduction to Three-dimensional Space / How 3D Animation is used in Films, Gaming, Architecture Visualizing, Medical industry, / Navigate Tools / Configure Viewports / Customizing the preferences / Select and Manipulate objects / Organizing 3D Scenes / NURBS and Polygons Models / Refine Polygonal Meshes / Camera / Rigs / Materials and Texturing / Timeline and Animation / Lighting/ Rendering / Final Project: Individual Student Project ( 1 min Animation Clip)</div>',
            'requirements' => '<ul><li><!--block-->"You must be at least 16 years old when you enroll.</li><li>Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH).</li>
            <li>Certificate in Graphic Designing (INTECH).</li></ul>',
            'duration' => '4 Months (100 Hours)',
            'price' => '25,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/certificate-3d1.jpg',
            'course_order' => 1,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor1->id
        ]);

        // $course6 = Course::create([
        //     'name' => 'Certificate in 3D Animation II',
        //     'url' => 'certificate-in-3d-animation-ii',
        //     'heading' => 'Learn 3D Animation from Scratch',
        //     'sub_heading' => 'Become a Successful 3D Animater',
        //     'meta_title' => 'Certificate in 3D Animation | INTECH | Reinvent Your Future',
        //     'meta_description' => 'Avengers: Infinity War is a film that has attracted millions across the world. The fascination of the film lies on superheroes including Ironman, Spiderman, Black Panther, etc flying with the help of Computer-Generated Imagery. Marvel Comics, loved by generations of readers and movie goers, are brought to life by 3D animation. Its newest creation is the Sri Lankan Comic ‘Gajaman’ becoming a 3D movie. By learning this course, not only will you be able to give wings to your dreams but also be employed in an industry that brings in much revenue annually.',
        //     'keywords' => '2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
        //     'content' => '<div><!--block-->Avengers: Infinity War is a film that has attracted millions across the world. The fascination of the film lies on superheroes including Ironman, Spiderman, Black Panther, etc flying with the help of Computer-Generated Imagery. Marvel Comics, loved by generations of readers and movie goers, are brought to life by 3D animation. Its newest creation is the Sri Lankan Comic ‘Gajaman’ becoming a 3D movie. By learning this course, not only will you be able to give wings to your dreams but also be employed in an industry that brings in much revenue annually.<br></div>',
        //     'syllabus' => '<ul><li><!--block--><strong>Max :</strong> Advance Modeling For Production, Digital Sculpting (Autodesk Mudbox), Advanced Texturing Techniques, Particle, Rigging Techniques, Character Animation, Setup And Animation, Working With AutoCAD File, Advanced Lighting (V-ray), Plugins, Advanced Rendering, Final Project</li></ul><div><br>OR<br><br></div><ul><li><!--block--><strong>Maya : </strong>Advance Modeling For Production, Digital Sculpting (Autodesk Mudbox), Uv &amp; Texture Painting, Rigging Techniques, Setup And Animation, Dynamics &amp; Simulations, Plugins, Reference, Rendering, Different Render Engines (CPU Vs GPU ), V Ray For Maya Render Engine, Final Project</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH).</li><li><!--block-->Certificate in Graphic Designing (INTECH).</li><li><!--block-->3d Animation Level I (Max And Maya)</li></ul>',
        //     'duration' => '4 Months (100 Hours)',
        //     'price' => '29,900',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/certificate-3d2.jpg',
        //     'course_order' => 6,
        //     'course_type_id' => $courseType2->id,
        //     'instructor_id' => $instructor2->id
        // ]);

        // $course7 = Course::create([
        //     'name' => 'Certificate in 3D Animation III',
        //     'url' => 'certificate-in-3d-animation-iii',
        //     'heading' => 'Master 3D Animation',
        //     'sub_heading' => 'Become a Successful 3D Animater',
        //     'meta_title' => 'Certificate in 3D Animation | INTECH | Reinvent Your Future',
        //     'meta_description' => 'Avengers: Infinity War is a film that has attracted millions across the world. The fascination of the film lies on superheroes including Ironman, Spiderman, Black Panther, etc flying with the help of Computer-Generated Imagery. Marvel Comics, loved by generations of readers and movie goers, are brought to life by 3D animation. Its newest creation is the Sri Lankan Comic ‘Gajaman’ becoming a 3D movie. By learning this course, not only will you be able to give wings to your dreams but also be employed in an industry that brings in much revenue annually.',
        //     'keywords' => '2D Animation, 3D Animation – Level_l (Max & Maya), Video Editing & VFX, Advertising, Auto Cad, 3D Animation – Level_ll (Max or Maya), 3D Animation – Level_lll, Freelancing',
        //     'content' => '<div><!--block-->Avengers: Infinity War is a film that has attracted millions across the world. The fascination of the film lies on superheroes including Ironman, Spiderman, Black Panther, etc flying with the help of Computer-Generated Imagery. Marvel Comics, loved by generations of readers and movie goers, are brought to life by 3D animation. Its newest creation is the Sri Lankan Comic ‘Gajaman’ becoming a 3D movie. By learning this course, not only will you be able to give wings to your dreams but also be employed in an industry that brings in much revenue annually.<br></div>',
        //     'syllabus' => '<ul><li><!--block-->Advanced Visual Effects</li><li><!--block-->Software Integration</li><li><!--block-->Story boarding &amp; Acting For Animation</li><li><!--block-->12 Principles Of Animations</li><li><!--block-->Rotoscoping</li><li><!--block-->Product Visualizing</li><li><!--block-->Motion Tracking &amp; Match moving</li><li><!--block-->Compositing</li><li><!--block-->Fluid Simulations</li><li><!--block-->Architecture Visualizing</li><li><!--block-->Motion Capturing Techniques</li><li><!--block-->Final Project</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH).</li><li><!--block-->Certificate in Graphic Designing (INTECH).</li><li><!--block-->3d Animation Level I (Max And Maya)</li><li><!--block-->3d Animation Level II (Max or Maya)</li></ul>',
        //     'duration' => '4 Months (100 Hours)',
        //     'price' => '32,900',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/certificate-3d3.jpg',
        //     'course_order' => 7,
        //     'course_type_id' => $courseType2->id,
        //     'instructor_id' => $instructor2->id
        // ]);

        $course8 = Course::create([
            'name' => 'Certificate in Computer Science',
            'url' => 'certificate-in-computer-science',
            'heading' => 'Learn Computer Science from Scratch',
            'sub_heading' => 'Become a Successful Computer Science',
            'meta_title' => 'Certificate in Computer Science | INTECH | Reinvent Your Future',
            'meta_description' => 'Even though technology is integrated in everything we do, we understand the need of learning the basics of a computer. In this course, we cover from registering your own e-mail address to managing and operating software. Created with prioritizing simple practical training, this course is suitable for even a housewife who doesn’t dream of becoming a software engineer. Anyone with even the basic of knowledge can enroll in this course to move forward in their career with proper knowledge and practical training.',
            'keywords' => 'Computer And Systems, Working With Windows, Ms Word / Ms Excel / Ms Powerpoint / Ms Access, Internet And Email, Adobe Photoshop, Hardware, Software, Adobe Premiere / Adobe Audition, Programming, Web Design, Network, E Money',
            'content' => '<div><!--block-->Even though technology is integrated in everything we do, we understand the need of learning the basics of a computer. In this course, we cover from registering your own e-mail address to managing and operating software. Created with prioritizing simple practical training, this course is suitable for even a housewife who doesn’t dream of becoming a software engineer. Anyone with even the basic of knowledge can enroll in this course to move forward in their career with proper knowledge and practical training.<br></div>',
            'syllabus' => '<ul><li><!--block-->Computer And Systems</li><li><!--block-->Working With Windows</li><li><!--block-->Ms Word / Ms Excel / Ms Powerpoint / Ms Access</li><li><!--block-->Internet And Email</li><li><!--block-->Adobe Photoshop</li><li><!--block-->Hardware, Software</li><li><!--block-->Adobe Premiere / Adobe Audition</li><li><!--block-->Programming</li><li><!--block-->Web Design</li><li><!--block-->Network</li><li><!--block-->E Money</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
            'duration' => '6 Months (195 Hours)',
            'price' => '29,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/cs.jpg',
            'course_order' => 2,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor10->id
        ]);

        $course11 = Course::create([
            'name' => 'Certificate in Photography',
            'url' => 'certificate-in-photography',
            'heading' => 'Learn Photography from Scratch',
            'sub_heading' => 'Become a Successful photographer',
            'meta_title' => 'Certificate in Photography | INTECH | Reinvent Your Future',
            'meta_description' => 'INTECH Certificate in Photography is completed with a series of practical assignments, where students will participate in local and global competitions and be taught by professionals with international exposure. This course will fully equip the students to enter the industry upon completion of the course.',
            'keywords' => 'Understanding the Camera, Oparating the Camera, Lenses & Filters, Digital Camera Settings, Lighting, Camera Accessories & Advance Digital Camera Settings, Art Photography, Post Processiong and Presenting, Applied Photography, Modern Camera Technologies and Trends, Special Photography Techniques',
            'content' => '<div><!--block-->INTECH Certificate in Photography is completed with a series of practical assignments, where students will participate in local and global competitions and be taught by professionals with international exposure. This course will fully equip the students to enter the industry upon completion of the course.</div><br><div><!--block-->Joseph Niepce born on the 07th March 1765 is considered as the father of Photography and he used a lens and a camera he made by himself to take a picture of people walking on the street with the help of sunlight reflected on the window. Taken during 1826-1827 period, View from the Window at Le Gras is the oldest surviving photograph today. Despite the public’s hesitance, the dedication and commitment of Niépce and other artists drove the French Parliament to accept photography as an art form. The journey that started as such has become one of the leading forms of art and profession that is practised all over the world by people from all walks of life.<br></div>',
            'syllabus' => '<ul><li><!--block-->Understanding the Camera</li><li><!--block-->Oparating the Camera</li><li><!--block-->Lenses &amp; Filters</li><li><!--block-->Digital Camera Settings</li><li><!--block-->Lighting</li><li><!--block-->Camera Accessories &amp; Advance Digital Camera Settings</li><li><!--block-->Art Photography</li><li><!--block-->Post Processiong and Presenting</li><li><!--block-->Applied Photography</li><li><!--block-->Modern Camera Technologies and Trends</li><li><!--block-->Special Photography Techniques</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH).</li></ul>',
            'duration' => '4 Months (100 Hours)',
            'price' => '32,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/Photography.jpg',
            'course_order' => 3,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor9->id
        ]);

        $course12 = Course::create([
            'name' => 'Certificate in 2D Animation',
            'url' => 'certificate-in-2d-animation',
            'heading' => 'Learn 2D Animation from Scratch',
            'sub_heading' => 'Become a Successful 2D Animater',
            'meta_title' => 'Certificate in 2D Animation | INTECH | Reinvent Your Future',
            'meta_description' => 'The Certificate of 2D animation creates an appeal and gives a basic understanding on animation. The course enables students to give life to their artifacts that they’ve created with their knowledge and understanding in graphics. Recognizing the mundane process of reading and looking through extensive content, most websites animate static letters and visuals with movements and shifts. This course covers knowledge on motion graphics and animation creation.',
            'keywords' => 'Understanding the Camera, Oparating the Camera, Lenses & Filters, Digital Camera Settings, Lighting, Camera Accessories & Advance Digital Camera Settings, Art Photography, Post Processiong and Presenting, Applied Photography, Modern Camera Technologies and Trends, Special Photography Techniques',
            'content' => '<div><!--block-->The Certificate of 2D animation creates an appeal and gives a basic understanding on animation. The course enables students to give life to their artifacts that they’ve created with their knowledge and understanding in graphics. Recognizing the mundane process of reading and looking through extensive content, most websites animate static letters and visuals with movements and shifts. This course covers knowledge on motion graphics and animation creation.<br></div>',
            'syllabus' => '<ul><li><!--block-->Anime studio pro&nbsp;</li><li><!--block-->2D Animation In depth&nbsp;</li><li><!--block-->2D Illustration and development&nbsp;</li><li><!--block-->Character Rigging&nbsp;</li><li><!--block-->Character Animation&nbsp;</li><li><!--block-->Scene setup&nbsp;</li><li><!--block-->Special Effects&nbsp;</li><li><!--block-->Rendering&nbsp;</li><li><!--block-->Post-Production</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH).</li></ul>',
            'duration' => '3 1/2 Months (88 Hours)',
            'price' => '27,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/certificate-2d.jpg',
            'course_order' => 4,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor8->id
        ]);

        $course13 = Course::create([
            'name' => 'Certificate in Web Design ',
            'url' => 'certificate-in-web-designing',
            'heading' => 'Learn Web Designing from Scratch',
            'sub_heading' => 'Become a Successful Web Designer',
            'meta_title' => 'Certificate in Web Designing | INTECH | Reinvent Your Future',
            'meta_description' => 'Shopping in the modern world has moved online. Keeping this shift in mind, business owners must now design and update their websites to attract customers. The Certificate in Web Design trains you to build websites that are easily accessible, device responsive, interactive, visually attractive and easily operated.',
            'keywords' => 'Adobe Photoshop, HTML Tags, CSS, HTML Bootstrap 4, JavaScript, jQuery, Bootstrap, Web Technologies, Server, WordPress, Google Maps, HTML Canvas',
            'content' => '<div><!--block-->Shopping in the modern world has moved online. Keeping this shift in mind, business owners must now design and update their websites to attract customers. The Certificate in Web Design trains you to build websites that are easily accessible, device responsive, interactive, visually attractive and easily operated.<br></div>',
            'syllabus' => '<ul><li><!--block-->Adobe Photoshop</li><li><!--block-->HTML Tags</li><li><!--block-->CSS</li><li><!--block-->HTML Bootstrap 4</li><li><!--block-->JavaScript</li><li><!--block-->jQuery</li><li><!--block-->Bootstrap</li><li><!--block-->Web Technologies</li><li><!--block-->Server</li><li><!--block-->WordPress</li><li><!--block-->Google Maps</li><li><!--block-->HTML Canvas</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH).</li></ul>',
            'duration' => '4 1/2 Months (110 Hours)',
            'price' => '29,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/Web-Designing.jpg',
            'course_order' => 5,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor10->id
        ]);

        $course14 = Course::create([
            'name' => 'Certificate in Freelancing',
            'url' => 'certificate-in-freelancing',
            'heading' => 'Learn Freelancing from Scratch',
            'sub_heading' => 'Become a Successful Freelancer',
            'meta_title' => 'Certificate in Freelancing | INTECH | Reinvent Your Future',
            'meta_description' => 'Parents are hesitant and curious when their children spend hours online and we understand why. Scrolling down on Facebook feeds for hours is just a waste of time. To add to that, we’ve heard of instances where young children have been victims of cybercrimes in recent times.',
            'keywords' => 'File sharing, Portfolio, Freelancer.com, Fiverr.com, Upwork.com, Image selling, Envato market, Turbosquid, International bank, Payment withdraws',
            'content' => '<div><!--block-->Parents are hesitant and curious when their children spend hours online and we understand why. Scrolling down on Facebook feeds for hours is just a waste of time. To add to that, we’ve heard of instances where young children have been victims of cybercrimes in recent times. But we also realize that the internet is a place where we can be rewarded for our creativity by providing services to the world. This course educates our students on how to embark on the freelancing journey from setting up an online account to managing global clients.<br></div>',
            'syllabus' => '<ul><li><!--block-->File sharing</li><li><!--block-->Portfolio</li><li><!--block-->Freelancer.com</li><li><!--block-->Fiverr.com</li><li><!--block-->Upwork.com</li><li><!--block-->Image selling</li><li><!--block-->Envato market</li><li><!--block-->Turbosquid</li><li><!--block-->International bank</li><li><!--block-->Payment withdraws</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Completion of any given courses conducted by INTECH (Diploma in Multimedia Graphic Design and Certificate in Advertising or Diploma in Multimedia 3d Animation and 3D Animation Level I, II, III or Diploma in Multimedia Video and Certificate in Video Production).</li></ul><div><!--block-->OR</div><ul><li><!--block-->Certificate in Graphic Design, Certificate in 3d Animation, Certificate in Video Editing from reputed institute.</li><li><!--block-->One year working experience in Graphic designing.</li></ul>',
            'duration' => '1 1/2 Months (40 Hours)',
            'price' => '10,000',
            'medium' => 'Sinhala / English',
            'image' => 'courses/Freelancing.jpg',
            'course_order' => 6,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor6->id
        ]);

        $course15 = Course::create([
            'name' => 'Certificate in Solid Work Essentials',
            'url' => 'certificate-in-solid-work-essentials',
            'heading' => 'Learn Solid Work from Scratch',
            'sub_heading' => 'Become a Solid Works Pro',
            'meta_title' => 'Certificate in Solid Work Essentials | INTECH | Reinvent Your Future',
            'meta_description' => 'The goal of this course is to teach how to use the solid works mechanical design automation software to build parametric models of parts and assemblies and how to make a simple drawing of those part assemblies. This solid work software is such a robust and features rich applications, Therefore the focus of this Course is on the fundamental skills and concepts central the successful use of the solid work software. Once you have developed a good foundation in basic skills, you can refer to the on-line help for information on less frequently used command options.',
            'keywords' => 'Solid works Basics and user interface, Introduction to sketching, Part modeling, Casting and forging, Patterning, Shelling and Ribs, Repairs, Drawing, Bottom up Assembly modeling, Assembly modeling',
            'content' => '<div><!--block-->The goal of this course is to teach how to use the solid works mechanical design automation software to build parametric models of parts and assemblies and how to make a simple drawing of those part assemblies.</div><div><!--block-->
            This solid work software is such a robust and features rich applications, Therefore the focus of this Course is on the fundamental skills and concepts central the successful use of the solid work software. Once you have developed a good foundation in basic skills, you can refer to the on-line help for information on less frequently used command options.<br></div>',
            'syllabus' => '<ul><li><!--block-->Solid works Basics and user interface</li><li><!--block-->Introduction to sketching</li><li><!--block-->Part modeling</li><li><!--block-->Casting and forging</li><li><!--block-->Patterning</li><li><!--block-->Shelling and Ribs</li><li><!--block-->Repairs</li><li><!--block-->Drawing</li><li><!--block-->Bottom up Assembly modeling</li><li><!--block-->Assembly modeling</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
            'duration' => '2 1/2 Months(60 Hours)',
            'price' => '49,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/solidworks.jpg',
            'course_order' => 7,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor8->id
        ]);

        $course16 = Course::create([
            'name' => 'IELTS',
            'url' => 'certificate-in-spoken-english',
            'heading' => 'Learn to Speak English with Confidence',
            'sub_heading' => 'Become a Public Speaker',
            'meta_title' => 'Spoken English | INTECH | Reinvent Your Future',
            'meta_description' => 'English is a skill that helps us in moving forward not only in our day-to-day lives but also in our professional environments. If the extensive number of English training institutes in Sri Lanka followed practical training methods, we could’ve been a country that mainly functions using the English language. But instead, we see students distancing them from learning the language. 
            Understanding this condition, we designed a practical English training course that incorporates speaking, listening, reading and writing into the curriculum.',
            'keywords' => 'Basics of communication, Public speaking skills, English grammar in use, Personality development, Speaking English for the real world, Job interview skills',
            'content' => '<div><!--block-->English is a skill that helps us in moving forward not only in our day-to-day lives but also in our professional environments. If the extensive number of English training institutes in Sri Lanka followed practical training methods, we could’ve been a country that mainly functions using the English language. But instead, we see students distancing them from learning the language.</div><div><!--block-->Understanding this condition, we designed a practical English training course that incorporates speaking, listening, reading and writing into the curriculum.<br></div>',
            'syllabus' => '<ul><li><!--block-->Basics of communication</li><li><!--block-->Public speaking skills</li><li><!--block-->English grammar in use</li><li><!--block-->Personality development</li><li><!--block-->Speaking English for the real world</li><li><!--block-->Job interview skills</li></ul>',
            'requirements' => '<ul><li><!--block-->We welcome students from all educational backgrounds as we have no formal entry requirements for this course.</li></ul>',
            'duration' => '5 Months (160 Hours)',
            'price' => '27,500',
            'medium' => 'Sinhala / English',
            'image' => 'courses/english.jpg',
            'course_order' => 8,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor6->id
        ]);

        $course17 = Course::create([
            'name' => 'Certificate in Graphic Design',
            'url' => 'certificate-in-graphic-design',
            'heading' => 'Learn Graphic Design from Scratch',
            'sub_heading' => 'Become a Successful Graphic Designer',
            'meta_title' => 'Certificate in Graphic Design | INTECH | Reinvent Your Future',
            'meta_description' => 'Graphic Designing is communication by creative visuals, spreading over leaflets, banners, posters, books, magazines and newspapers and even movies.',
            'keywords' => 'Colors and Effects, Channel mixing Mask, Crop and Printing Methods, Photo Retouching Drawing, Painting, Filters and Actions, Smart Objects Plugins, layers Animation in Photoshop (gif)',
            'content' => '<div><!--block-->Graphic Designing is communication by creative visuals, spreading over leaflets, banners, posters, books, magazines and newspapers and even movies.</div><div><!--block-->This Graphic Designing course delivers a cohesive knowledge and training on how to attract audiences with creative visuals.</div><div><!--block-->Notice when you go to a shop, you no longer ask for a bar of soap, a cool drink or a mobile phone. You specifically ask for a bar of Lifebuoy or Lux, a bottle of Coca Cola or Pepsi, or a Samsung phone or an Apple phone. Our consumer behaviours are greatly influenced by brand names promoted and brought to life by Advertising.</div><div><!--block-->In today’s world, Advertising in an industry that employs many creative annually giving them the freedom to think independently and creatively. The INTECH Advertising course is a valuable course for professionals who are already recruited or aspires to join the advertising industry.<br></div>',
            'syllabus' => '<ul><li><!--block--><strong>Adobe Photoshop:</strong> Colors and effects / Channel mixing / Mask / Crop and Printing Methods / Photo Retouching / Drawing / Painting / Filters and Actions / Smart Objects / Plugins / Layer Animation in Photoshop (gif)</li><li><!--block--><strong>Adobe Illustrator:</strong> Vector tools / Colors / 2D Illustration / Pattern / 2 and 4 color Artwork / Typography </li><li><!--block--><strong>In Design:</strong> Publications / Text frame options and Fitting options / Palette option / Drop Shadow / Feather / Corner Effects / Color / Swatches / Layers / Package option / Save and Export options</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
            'duration' => '6 Months (360 Hours)',
            'price' => '27,000',
            'medium' => 'Sinhala / English',
            'image' => 'courses/certificate_graphic_design.jpg',
            'course_order' => 9,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor5->id
        ]);

        $course18 = Course::create([
            'name' => 'Certificate in Video Editing & VFX',
            'url' => 'certificate-in-video-editing-vfx',
            'heading' => 'Learn Video Editing & VFX from Scratch',
            'sub_heading' => 'Become a Successful Post-Production Expert',
            'meta_title' => 'Certificate in Video Editing & VFX | INTECH | Reinvent Your Future',
            'meta_description' => 'Video production is the integration of audiovisuals with movements. Video Production is successfully completed with seamless pre-production, production and post-production process. Production planning, scriptwriting, timeline planning, and equipment arrangements include in the pre-production period. Videography is done during production, whereas the quality of the clips and the total video is edited in the post-production period, telling a smooth and consistent story with sound and light controls.',
            'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
            'content' => '<div><!--block-->Video production is the integration of audiovisuals with movements. Video Production is successfully completed with seamless pre-production, production and post-production process.</div><div><!--block-->Production planning, scriptwriting, timeline planning, and equipment arrangements include in the pre-production period. Videography is done during production, whereas the quality of the clips and the total video is edited in the post-production period, telling a smooth and consistent story with sound and light controls.<br></div>',
            'syllabus' => '<ul><li><!--block-->Pre-Production / Video Production Workflow / Introduction to Post-Production / Linear and Nonlinear Editing / Editing Rule and Ethics / Vfx / Adobe Premier: (Understanding the Interface & Basic / Importing to Raster and Vector Graphic / Tools & Techniques / Effects and Transitions / Project Handling and finalized ) / Audio Production / Adobe Audition: (Audio Recording / Instruments & Technology / Sound Design for Video Production / Sound Mixing) / Adobe After Effects: (Importing to Raster and Vector Graphic / Tools & Techniques / Text Animations / 3D Animation in After Effects / Special Effects / Plugins and Tips) / Visual effects and Project Finalizing / Plugins & Techniques / Hardware & Equipment / Color Corrections / Color Grading / Converting and Exporting / Organizing an idea / Scripting / Story Board Design / Video Formats and Finalizing / Final Projects</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH) or Certificate in Graphic Designing (INTECH)</li></ul>',
            'duration' => '4 months ( 100 Hours)',
            'price' => '29,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/VFX.jpg',
            'course_order' => 10,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor4->id
        ]);

        $course19 = Course::create([
            'name' => 'Certificate in 3D Architectural Modelling & Visualization',
            'url' => 'certificate-in-3d-architectural-modelling-visualization',
            'heading' => 'Learn 3D Architectural Modelling & Visualization',
            'sub_heading' => 'Become a Successful Architectural Expert',
            'meta_title' => 'Certificate in 3D Architectural Modelling & Visualization | INTECH | Reinvent Your Future',
            'meta_description' => 'Architectural visualization helps architects and designers to work collaboratively and communicate ideas more efficiently.',
            'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
            'content' => '<div><!--block-->Architectural visualization helps architects and designers to work collaboratively and communicate ideas more efficiently.</div><div><!--block-->This course, regardless of your industry background, will share basic concepts of Architectural Visualization. The course will use Blender (free and open source tool) to demonstrate the concepts explained in the course.<br></div>',
            'syllabus' => '<ul><li>What is3D Modeling?</li><li>History of 3D Modeling</li><li>Creating 3D Environments</li><li>Visual Elements</li><li>3D Geometrics</li><li>3D Modelling</li><li>Animation/vfx/</li><li>Texturing</li><li>The Power of Light and Shade</li><li>Rendering</li><li>Environmental Models</li><li>Molding Your Future</li><li>Summary</li></ul>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH) or Certificate in Graphic Designing (INTECH)</li></ul>',
            'duration' => '3 1/2 Months (360 Hours)',
            'price' => '29,900',
            'medium' => 'Sinhala / English',
            'image' => 'courses/3d-architectural-modelling.jpg',
            'course_order' => 11,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor3->id
        ]);

        $course20 = Course::create([
            'name' => 'Certificate in Advertising',
            'url' => 'certificate-in-advertising',
            'heading' => 'Learn Advertising/Marketing',
            'sub_heading' => 'Become a Successful Advertising Expert',
            'meta_title' => 'Certificate in Advertising | INTECH | Reinvent Your Future',
            'meta_description' => 'Some students may choose to earn a certificate by completing a specialized series of courses on a particular subject. While some programs require a certificate, many students choose this course of study to enhance their employability in their field of interest.There are a variety of options available to students, including programs that emphasize advertising business management, programs that focus on liberal arts theories, and programs that concentrate on graphic design. The coursework depends on which concepts within advertising are being focused on.',
            'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
            'content' => '<div><!--block-->Understand the major advertising platforms, including: display, video, audio, sponsored, native, social media, search and programmatic.<br></div><div>Some students may choose to earn a certificate by completing a specialized series of courses on a particular subject. While some programs require a certificate, many students choose this course of study to enhance their employability in their field of interest.<br></div><div>There are a variety of options available to students, including programs that emphasize advertising business management, programs that focus on liberal arts theories, and programs that concentrate on graphic design. The coursework depends on which concepts within advertising are being focused on. Courses can include topics like consumer trends, media sales and market behavior. Students may also focus on visual arts, including color, layout and communicating ideas effectively.<br></div>',
            'syllabus' => '<div><!--block-->Introduction to Advertising / Histry of Advertising / Traditional Mediums of Advertising / understanding Market Behaviour / positioning of a Product / Strategic Thinking and Ideation / Wedding Album / Conceptualization / Advertising Ethics / typography / Infography / Course Marketing / Golden Ratio / Digital Advertising / Studying Local Campaigns / Studying International Campaigns / LOGO Design Geometric Shapes / Icon / Dangler / Flyer / FB Ad/ Broucher / Wedding Album / Vehicle Branding / T-shirt Design / Typography / poster / Hording Packaging and Lables / Business Cards / Web Template / LOGO Design</div>',
            'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li><li><!--block-->Passes in five subjects (in any subject stream) at the G.C.E. (Ordinary Level) Examination or Certificate in computer science (INTECH) or Certificate in Graphic Designing (INTECH)</li></ul>',
            'duration' => '4 months (100 Hours)',
            'price' => '29,900',
            'medium' => 'Sinhala',
            'image' => 'courses/certificate-advert.jpg',
            'course_order' => 12,
            'course_type_id' => $courseType1->id,
            'instructor_id' => $instructor3->id
        ]);

        // $course22 = Course::create([
        //     'name' => 'Photoshop Short Course',
        //     'url' => 'photoshop-short-course',
        //     'heading' => 'Learn Photoshop from Scratch',
        //     'sub_heading' => 'Basics of Adobe Photoshop',
        //     'meta_title' => 'Photoshop Short Course | INTECH | Reinvent Your Future',
        //     'meta_description' => 'Learn the basics and fundamentals of Adobe Photoshop, including how to open images, work with the interface, save work, and more.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->Learn the basics and fundamentals of Adobe Photoshop, including how to open images, work with the interface, save work, and more.<br></div>',
        //     'syllabus' => '<ul><li>Introduction  / Getting Started using Photoshop</li><li>Working with Images</li><li>Resizing and Cropping Images</li><li>Working with Basic Selections </li><li>Layers</li><li>Painting in Photoshop</li><li>Working With The Pen Tool</li><li>Photo Retouching</li><li>Color Correction</li><li>Using Masks And The Quick Mask Mode</li><li>Creating Special Effects</li><li>Printing And Exporting Your Work</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '2 months',
        //     'price' => '15,000',
        //     'level' => 'Certificate',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/photoshop-short-course.jpg',
        //     'course_order' => 22,
        //     'course_type_id' => $courseType3->id,
        //     'instructor_id' => $instructor7->id
        // ]);

        // $course23 = Course::create([
        //     'name' => 'Pre-Medicine',
        //     'url' => 'pre-medicine-short-course',
        //     'heading' => 'Learn Pre-Medicine',
        //     'sub_heading' => 'Basics of Pre-Medicine',
        //     'meta_title' => 'Pre-Medicine Short Course | INTECH | Reinvent Your Future',
        //     'meta_description' => 'Pre-medicine course is designed to cover up the basic concepts and terminology of the basic sciences of pre clinical phase of the medical school.suitable for after A/Ls who are expecting the medical school entrance Local or overseas.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->Pre-medicine course is designed to cover up the basic concepts and terminology of the basic sciences of pre clinical phase of the medical school.suitable for after A/Ls who are expecting the medical school entrance Local or overseas.<br></div>',
        //     'syllabus' => '<ol><li>Anatomy - Osteology (bones of upper limb)</li><li>Anatomy - Axilla, Brachial plexus, Muscles of upper lomb part 1</li><li>Anatomy - Muscles of upper limb part 2, joints</li><li>Anatomy - Vessels of upper limb (Arteries,Veins,Nerves,)part 1,Histology 1</li><li>Anatomy - Vessels of upper limb (Arteries, Veins, Nerves,) part 2, Histology 2</li><li>Anatomy - Special Structures of upperlimb, Histology 3, paper discussion, practical test.</li><li>Biochemistry - Introduction to metabolism, Glycolysis,TCA cycle,Et Chain.</li><li>Biochemistry - Gluconeogenesis, pentose Phosphate pathway, glycogen Metabolism, paper discussion.</li><li>Physiology - Introduction, Body fluids, Oedema</li><li>Physiology - Anemia,Neurophysioligy,paper discussion.</li><li>Thorax Anatomy,Embryology of the heart.</li><li>Fat Metabolism ( Biochemistry revision) Paper discussion (Overall Revision)</li></ol>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '10 days (72 Hours)',
        //     'price' => '10,000',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/pre-medicine-short-course.jpg',
        //     'course_order' => 23,
        //     'course_type_id' => $courseType3->id,
        //     'instructor_id' => $instructor7->id
        // ]);

        // $course24 = Course::create([
        //     'name' => 'Pre-Engeneering',
        //     'url' => 'pre-engeneering-short-course',
        //     'heading' => 'Learn Pre-Engeneering',
        //     'sub_heading' => 'Basics of Pre-Engeneering',
        //     'meta_title' => 'Pre-Engeneering Short Course | INTECH | Reinvent Your Future',
        //     'meta_description' => 'This course envisages providing essential fundamentals, knowledge and skills for students to enrol into Engineering / Quantity Surveying higher education programmes. The course provides application of what student have learnt in Physics and Mathematics, in particular school level education through participatory student centric learning environment including Engineering Workshops, Seminars, Field Visits and Lab work.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->This course envisages providing essential fundamentals, knowledge and skills for students to enrol into Engineering / Quantity Surveying higher education programmes. The course provides application of what student have learnt in Physics and Mathematics, in particular school level education through participatory student centric learning environment including Engineering Workshops, Seminars, Field Visits and Lab work.<br></div>',
        //     'syllabus' => '<div><!--block-->n/a<br></div>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '10 days (72 Hours)',
        //     'price' => '10,000',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/pre-engeneering-short-course.jpg',
        //     'course_order' => 24,
        //     'course_type_id' => $courseType3->id,
        //     'instructor_id' => $instructor7->id
        // ]);

        // $course25 = Course::create([
        //     'name' => 'Graphic Design Package',
        //     'url' => 'graphic-design-package',
        //     'heading' => 'Learn Graphic Design',
        //     'sub_heading' => 'Learn Graphic Design from Scratch',
        //     'meta_title' => 'Graphic Design Package | INTECH | Reinvent Your Future',
        //     'meta_description' => 'Graphic design is all around us, in a myriad of forms, both on screen and in print, yet it is always made up of images and words to create a communication goal. This four-course sequence exposes students to the fundamental skills required to make sophisticated graphic design: process, historical context, and communication through image-making and typography. The sequence is completed by a capstone project that applies the skills of each course and peer feedback in a finished branding project suitable for a professional portfolio.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->Graphic design is all around us, in a myriad of forms, both on screen and in print, yet it is always made up of images and words to create a communication goal. This four-course sequence exposes students to the fundamental skills required to make sophisticated graphic design: process, historical context, and communication through image-making and typography. The sequence is completed by a capstone project that applies the skills of each course and peer feedback in a finished branding project suitable for a professional portfolio.<br></div>',
        //     'syllabus' => '<ul><li>Certificate in Graphic Design </li><li>Certificate in Advertising</li><li>Certificate in Freelancing</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '10 months',
        //     'price' => '54,900',
        //     'level' => 'Certificate',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/graphic-design-package.jpg',
        //     'course_order' => 25,
        //     'course_type_id' => $courseType4->id,
        //     'instructor_id' => $instructor5->id
        // ]);

        // $course26 = Course::create([
        //     'name' => 'IT Package',
        //     'url' => 'it-package',
        //     'heading' => 'Learn IT Fundamentals',
        //     'sub_heading' => 'Become a Genius in IT',
        //     'meta_title' => 'IT Package | INTECH | Reinvent Your Future',
        //     'meta_description' => 'If you are passionate about learning new things, fascinated by computers, and enjoy problem-solving, you can become a computer genius. And don’t worry if you can’t pursue a computer science degree. You can build computer mastery by combining a solid understanding of computer fundamentals with hands-on experience, troubleshooting skills, and knowing how to find useful information.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->If you are passionate about learning new things, fascinated by computers, and enjoy problem-solving, you can become a computer genius. And don’t worry if you can’t pursue a computer science degree. You can build computer mastery by combining a solid understanding of computer fundamentals with hands-on experience, troubleshooting skills, and knowing how to find useful information.<br></div>',
        //     'syllabus' => '<ul><li>Certificate in Computer Science</li><li>Certificate in Spoken English</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '7 months',
        //     'price' => '45,000',
        //     'level' => 'Certificate',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/it-package.jpg',
        //     'course_order' => 26,
        //     'course_type_id' => $courseType4->id,
        //     'instructor_id' => $instructor5->id
        // ]);

        // $course27 = Course::create([
        //     'name' => 'Engineering Drawing Package',
        //     'url' => 'engineering-drawing-package',
        //     'heading' => 'Engineering Drawing',
        //     'sub_heading' => 'Learn Engineering Drawing Fundamentals',
        //     'meta_title' => 'Engineering Drawing Package | INTECH | Reinvent Your Future',
        //     'meta_description' => 'One of the best ways to communicate one\'s ideas is through some form of picture or drawing. This is especially true for the engineer. The purpose of this guide is to give you the basics of engineering sketching and drawing.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->One of the best ways to communicate one\'s ideas is through some form of picture or drawing. This is especially true for the engineer. The purpose of this guide is to give you the basics of engineering sketching and drawing.<br></div>',
        //     'syllabus' => '<ul><li>Certificate in AutoCAD</li><li>Certificate in Solid Work Essentials</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '4 months',
        //     'price' => '64,900',
        //     'level' => 'Certificate',
        //     'medium' => 'Sinhala / English',
        //     'image' => 'courses/engineering-drawing-package.jpg',
        //     'course_order' => 27,
        //     'course_type_id' => $courseType4->id,
        //     'instructor_id' => $instructor2->id
        // ]);

        // $course28 = Course::create([
        //     'name' => 'Diploma Multimedia Package',
        //     'url' => 'diploma-multimedia-package',
        //     'heading' => 'Diploma Multimedia Package',
        //     'sub_heading' => 'Understand the evolution of Multimedia Technologies',
        //     'meta_title' => 'Diploma Multimedia Package | INTECH | Reinvent Your Future',
        //     'meta_description' => 'This programme aims to cover several important areas of Graphic Designing, Digital Animation, Web Designing, Video editing & 3D Modeling for absolute beginners such as; Theoretical Aspects & Applications of Graphic Designing, Animation & Web Development  Basic Theory, Graphics and Multimedia.',
        //     'keywords' => 'Pre-Production, Video Production Workflow, Introduction to Post-Production, Linear and Nonlinear Editing, Editing Rule and Ethics, Vfx, Adobe Premier: (Understanding the Interface & Basic, Importing to Raster and Vector Graphic, Tools & Techniques, Effects and Transitions, Project Handling and finalized ), Audio Production, Adobe Audition: (Audio Recording, Instruments & Technology, Sound Design for Video Production, Sound Mixing), Adobe After Effects: (Importing to Raster and Vector Graphic, Tools & Techniques, Text Animations, 3D Animation in After Effects, Special Effects, Plugins and Tips), Visual effects and Project Finalizing, Plugins & Techniques, Hardware & Equipment, Color Corrections, Color Grading, Converting and Exporting, Organizing an idea, Scripting, Story Board Design, Video Formats and Finalizing, Final Projects',
        //     'content' => '<div><!--block-->This programme aims to cover several important areas of Graphic Designing, Digital Animation, Web Designing, Video editing & 3D Modeling for absolute beginners such as; Theoretical Aspects & Applications of Graphic Designing, Animation & Web Development  Basic Theory, Graphics and Multimedia.<br></div>',
        //     'syllabus' => '<ul><li>Diploma in Graphic Design</li><li>Diploma in 3D Animation</li><li>Diploma in Video</li></ul>',
        //     'requirements' => '<ul><li><!--block-->You must be at least 16 years old when you enroll.</li></ul>',
        //     'duration' => '14 months',
        //     'price' => '259,900',
        //     'level' => 'Diploma',
        //     'medium' => 'Sinhala / English',
        //     'course_order' => 28,
        //     'image' => 'courses/diploma-multimedia-package.jpg',
        //     'course_type_id' => $courseType4->id,
        //     'instructor_id' => $instructor8->id
        // ]);
    }
}
