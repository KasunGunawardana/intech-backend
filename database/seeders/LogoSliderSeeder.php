<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\LogoSlider;

use App\Models\LogoImage;

class LogoSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logoSlider = LogoSlider::create([
            'visiblity' => TRUE,
        ]);

        $logo1 = LogoImage::create([
            'name' => 'BCS',
            'image' => 'logos/bcs.png',
            'logo_order' => 1
        ]);

        $logo2 = LogoImage::create([
            'name' => 'TVEC',
            'image' => 'logos/tvec.png',
            'logo_order' => 2
        ]);

        $logo3 = LogoImage::create([
            'name' => 'Oracle',
            'image' => 'logos/oracle.png',
            'logo_order' => 3
        ]);

        $logo4 = LogoImage::create([
            'name' => 'Indeepa',
            'image' => 'logos/indeepa.png',
            'logo_order' => 4
        ]);
    }
}
