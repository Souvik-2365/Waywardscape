<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Souvik Patra',
            'email' => 'patrasouvik2001@gmail.com',
            'mobile' => '9641412365',
            'image' => fake()->randomElement(['build/user-1.jpg','build/user-2.jpg','build/user-3.jpg',
            'build/user-4.jpg','build/user-5.jpg','build/user-6.jpg','build/user-7.jpg']),
            'address' => 'West Bengal',
            'password' => Hash::make('admin'),
        ]);
    }
}
