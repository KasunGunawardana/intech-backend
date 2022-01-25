<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(ContactDetailsSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(BlockSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(EffectsSeeder::class);
        $this->call(LogoSliderSeeder::class);
    }
}
