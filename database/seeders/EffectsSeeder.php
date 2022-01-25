<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Effect;

class EffectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $effect1 = Effect::create([
            'name' => 'None',
            'visibility' => TRUE
        ]);

        $effect2 = Effect::create([
            'name' => 'Christmas',
            'visibility' => FALSE
        ]);
    }
}
