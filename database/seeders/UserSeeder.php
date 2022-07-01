<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hiskia Anggi Puji Pratama',
            'email' => 'hi@hiskia.app',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
