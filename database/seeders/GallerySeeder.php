<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Gallery;
use App\Models\GalleryList;
use App\Models\GalleryImage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = Gallery::create([
            'show_nav' => TRUE,
            'sub_heading' => 'Our Gallery'
        ]);

        $gallery1 = GalleryList::create([
            'name' => 'This is a dummy gallery',
            'content' => 'This is a dummy gallery !!!',
            'order' => 1
        ]);

        $galleryimage1 = GalleryImage::create([
            'gallery_list_id' => 1,
            'image' => 'galleryimages/test.png',
            'order' => 1
        ]);
    }
}
