<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Blog;
use App\Models\Post;
use App\Models\Category;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = Blog::create([
            'show_nav' => FALSE,
            'description_heading' => 'About Us',
            'description' => 'INTECH marks our unique authenticity by training our students with industry related exercises and up-to-date knowledge.',
        ]);

        $category1 = Category::create([
            'name' => 'Education'
        ]);

        $category2 = Category::create([
            'name' => 'News'
        ]);

        $category3 = Category::create([
            'name' => 'Events'
        ]);

        $post1 = Post::create([
            'title' => 'Education is the Key to Success',
            'url' => 'education_is_the_key_to_success',
            'description' => 'What is my American Creed...my American Creed is that I believe that education is the key to success. “Education is the most powerful weapon which you can use to change the world..”(Nelson Mandela)',
            'content' => "<p style='text-align: center;'><span style='color: rgb(31, 31, 31); font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;'><strong>&ldquo;My American Creed&rdquo;</strong></span></p><p style='text-align: center;'><br></p><p style='box-sizing: border-box; border: 0px solid rgb(204, 204, 204); margin: 1em 0px 0px; color: rgb(31, 31, 31); font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><em>What is my American Creed...my American Creed is that I believe that education is the key to success. &ldquo;Education is the most powerful weapon which you can use to change the world..&rdquo;(Nelson Mandela) &nbsp;</em> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p style='box-sizing: border-box; border: 0px solid rgb(204, 204, 204); margin: 1em 0px 0px; color: rgb(31, 31, 31); font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Why is education the key to success? &ldquo;Education is the key to success in life, and teachers make a lasting impact in the lives of their students&rdquo;(Solomon Ortiz). I say education is the key to success because even though many may say that it does not prepare us for what we need in real life or everyday life. It gives us good social skills, work ethic and time management. Many come to the conclusion that what teachers teach us won&rsquo;t be useful for us in the future or won&rsquo;t benefit us for the specific career path that we would like to go down but it shows us what we are strong and excel significantly at which can help us to see what we are truly fit best for. &ldquo;Education is the key to unlock the Golden door of Freedom&rdquo;(George Washington Carver). Having an education puts us in the best place to have a secured future for ourselves. We can think outside the box to come up with productive ideas which can do us good. Even better it&rsquo;ll place us with a good paying job.</p><p style='box-sizing: border-box; border: 0px solid rgb(204, 204, 204); margin: 1em 0px 0px; color: rgb(31, 31, 31); font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; From experience my mom didn&rsquo;t finish high school neither did she attend college she is 34 years old and has been with her job for 10 years. Recently she has gotten an opportunity to work at a higher stance with her company with a better pay. It took her 10 years to be able to show her company that even though she didn&rsquo;t attend college and didn&rsquo;t complete high school that she can make a difference for them. Even though it turned out okay for her she still struggles for many things because she could be way higher but because of the past it may be awhile before she gets another opportunity to step up to another level. Then looking at my stepdad who finished high school and graduated college with a degree is the manager of his company just after a couple years of working with them.</p><p style='box-sizing: border-box; border: 0px solid rgb(204, 204, 204); margin: 1em 0px 0px; color: rgb(31, 31, 31); font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>&nbsp; &nbsp; &nbsp; &nbsp;Looking at with what our teachers teach at school even though right now we can&rsquo;t really say what will help us we could be surprised when we meet face to face again with it in the future. While comparing both my mom and step dad with the set of education that they have it really shows me how having an education really is the key to having a successful future. With it you can accomplish more than you think and it can have a great impact on your life. So when in class don&rsquo;t see what your teacher is teaching you as a waste of time look at it as setting you on the right path to making your future a walk in the park because what their doing is making things easier for you.</p>",
            'image' => 'posts/education_is_the_key_to_success.jpg',
            'category_id' => $category1->id,
            'views' => 0
        ]);

        $post2 = Post::create([
            'title' => 'What Are The Types Of Educational Events?',
            'url' => 'what-are-the-types-of-educational-events',
            'description' => 'Conferences are large events that bring together education professionals in the field of study. Activities at these events include speakers, workshops, and networking sessions. The people attending conferences attend this event with shared interests and purpose.',
            'content' => "<p>Conferences</strong> &ndash; Conferences are large events that bring together education professionals in the field of study. Activities at these events include speakers, workshops, and networking sessions. The people attending conferences attend this event with shared interests and purpose.&nbsp;</p><p>Summits</strong> &ndash; Summits are often meetings with high-level professionals to discuss the newest findings in a field. Some summits function just like conferences but they are actually quite different from each other. A summit only includes delegates, representatives and members of a board or committee.</p><p>Symposium&nbsp;</strong>&ndash; Symposiums are events where experts in the field give presentations to an audience.</p><p>Due to the pandemic, many education conference events had to shift their strategies and were to be held online as per the COVID-19 &nbsp;considerations for gatherings and events. Education conferences in 2021 will take a new approach with these major shifts in mind.</p>",
            'image' => 'posts/events.jpg',
            'category_id' => $category2->id,
            'views' => 0
        ]);

        $post3 = Post::create([
            'title' => 'Child development plan targets gamut of risks',
            'url' => 'child_development_plan_targets_gamut_of_risks',
            'description' => 'Conferences are large events that bring together education professionals in the field of study. Activities at these events include speakers, workshops, and networking sessions. The people attending conferences attend this event with shared interests and purpose.',
            'content' => "<p>Child development can be vastly improved by providing pregnant women and caregivers of children with an integrated intervention that consists of improved water, sanitation, hygiene (WASH), nutrition, mental health care and lead exposure prevention, says a study conducted in Bangladesh.</p><p>Published this March in BMJ Global Health, the study noted that children in low- and middle-income countries (LMICs) face a substantially increased risk of delayed development. “An estimated one-third of three-year-old and four-year-old children in LMICs — 80.8 million children in total — did not meet basic developmental milestones in 2010,” it stated.</p><p>In the early life of children, factors promoting development include responsive caregiving, nutrition of mother and child, caregiver’s mental health, exposure to opportunities for early learning and avoidance of infection, the study observed.</p><p>Helen Pitchik, first author of the study and PhD candidate at the School of Public Health, University of California, Berkeley, US, says the multifaceted intervention tackles multiple risk factors for poor child health and development.</p>",
            'image' => 'posts/news.jpg',
            'category_id' => $category3->id,
            'views' => 0
        ]);
    }
}
