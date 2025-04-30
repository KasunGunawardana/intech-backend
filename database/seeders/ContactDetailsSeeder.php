<?php

namespace Database\Seeders;

use App\Models\CompanyDetail;

use Illuminate\Database\Seeder;

class ContactDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyDetail::create([
            'company_name' => 'AR Educations',
            'description' => 'AR Educations marks our unique authenticity by training our students with industry related exercises and up-to-date knowledge.',
            'email' => 'info.areducations@gmail.com',
            'telephone' => '074 138 2772',
            'mobile' => '071 935 39 77',
            'additional_tel' => '',
            'fax' => '',
            'registration_number' => '',
            'address1' => 'No 129',
            'address2' => 'Ja-ela Road',
            'city' => 'Gampaha',
            'country' => 'Sri lanka',
            'map' => '',
            'facebook' => 'https://www.facebook.com/areducations1111',
            'instagram' => 'https://www.instagram.com/ar_educations1111/',
            'youtube' => 'https://www.youtube.com/'
        ]);
    }
}
