<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'role_id'=>1,
            'is_system_admin'=>1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make(1234),


        ]);
    }
}
