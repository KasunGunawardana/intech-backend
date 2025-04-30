<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'kasun4it@gmail.com')->first();

        if(!$user) {
        	User::create([
        		'name' => 'Kasun',
        		'email' => 'kasun4it@gmail.com',
                'role' => 'admin',
        		'password' => Hash::make('password@123')
        	]);
        }

        $user1 = User::where('email', 'user@areducations.lk')->first();

        if(!$user1) {
        	User::create([
        		'name' => 'User',
        		'email' => 'user@areducations.lk',
                'role' => 'user',
        		'password' => Hash::make('password@123')
        	]);
        }
    }
}
