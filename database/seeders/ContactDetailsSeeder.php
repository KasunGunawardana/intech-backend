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
            'company_name' => 'INTECH',
            'description' => 'INTECH (Indeepa college of technology)  marks our unique authenticity by training our students with industry related exercises and up-to-date knowledge.',
            'email' => 'info.intechcollege@gmail.com',
            'telephone' => '033 22 3 87 87',
            'mobile' => '070 62 3 87 87',
            'additional_tel' => '077 96 3 54 95',
            'fax' => '',
            'registration_number' => '',
            'address1' => 'No 129',
            'address2' => 'Ja-ela Road',
            'city' => 'Gampaha',
            'country' => 'Sri lanka',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7918.586941318874!2d79.990331!3d7.091941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x612116336c8032e2!2sIndeepa%20College%20of%20Technology%20(Pvt)%20Ltd!5e0!3m2!1sen!2sus!4v1631430783297!5m2!1sen!2sus" style="border:0; width: 100%; height:200px;" allowfullscreen="" loading="lazy"></iframe>',
            'facebook' => 'https://www.facebook.com/indeepaIT',
            'twitter' => 'https://www.instagram.com/indeepacollegeoftechnology/',
            'youtube' => 'https://www.youtube.com/channel/UCQyQecvcd2OWQX6KCtqdlHQ'
        ]);
    }
}
