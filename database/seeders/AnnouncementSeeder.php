<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcement1 = Announcement::create([
            'name' => 'Short course discount',
            'image' => 'announcements/short-course.jpg',
        ]);
    }
}
